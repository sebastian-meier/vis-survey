<?php

	require_once("config.php");

	/* Lets see where we are... */

	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}else{
		$page = "intro";
	}

	if(isset($_GET["section"])){
		$section = $_GET["section"];
	}else{
		$section = 0;
	}

	if(isset($_GET["subsection"])){
		$subsection = $_GET["subsection"];
	}else{
		$subsection = 0;
	}

	if(isset($_GET["step"])){
		$step = $_GET["step"];
	}else{
		$step = 0;
	}
	if(isset($_GET["substep"])){
		$substep = $_GET["substep"];
	}else{
		$substep = 0;
	}

	/* SESSION handling */

	session_start();

	if(!isset($_SESSION["user_id"])||($_SESSION["user_id"]<1)){
		$result = query('SELECT `group`, `subgroup`, COUNT(*) AS `count` FROM `user` WHERE done = 1 OR created > DATE_SUB(NOW(), INTERVAL 1 HOUR) GROUP BY `group`, `subgroup`');
		$groups = array(
			"j" => array(
			),
			"s" => array(
			)
		);

		foreach ($groups as $key => $group) {
			for($i = 0; $i<12; $i++) {
				array_push($groups[$key], array("id" => $i, "value" => 0));
			}
		}

		$sums = array();
		foreach ($groups as $key => $group) {
			$sums[$key] = 0;
		}

		if(is_object($result)){
			while ($row = $result->fetch_row()) {
				$groups[$row[0]][$row[1]]["value"] = intval($row[2]);
			}
			foreach ($groups as $key => $group) {
				$sort = array();
				foreach ($groups[$key] as $i => $item) {
					$sums[$key] += $item["value"];
					array_push($sort, $item["value"]);
				}
				array_multisort($sort, $groups[$key], SORT_ASC);
			}
		}

		$sort_sums = array();
		foreach ($sums as $sum) {
			array_push($sort_sums, $sum);
		}

		array_multisort($sort_sums, $sums, SORT_ASC);

		$group = key($sums);

		$key_subgroup = key($groups[$group]);
		$subgroup = $groups[$group][$key_subgroup]["id"];

		query('INSERT INTO `user` (`created`, `group`, `subgroup`)VALUES("'.(new DateTime())->format('Y-m-d H:i:s').'", "'.$group.'", '.$subgroup.')');
		$_SESSION["user_id"] = $mysqli->insert_id;
		$_SESSION["user_group"] = $group;
		$_SESSION["g"] = $group;
		$_SESSION["user_subgroup"] = $subgroup;
	}

	if(isset($_GET["tag"])){
		query('UPDATE user SET tag = "'.$_GET["tag"].'" WHERE id = '.$_SESSION["user_id"]);
	}

	$group = $_SESSION["user_group"];
	$subgroup = $_SESSION["user_subgroup"];

	require_once("pages/elements/header.php");

	if(file_exists("pages/".$page.".php")){
		require_once("pages/".$page.".php");
	}else{
		require_once("pages/error.php");
	}

	require_once("pages/elements/footer.php");

?>