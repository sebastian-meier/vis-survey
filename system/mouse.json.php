<?php

	require_once("config.php");

	function my_strrpos($haystack, $needle) {
		$index = strpos(strrev($haystack), strrev($needle));
		if($index === false) {
			return false;
		}
		$index = strlen($haystack) - strlen($needle) - $index;
		return $index;
	}

	$json = array();

	$result = query('SELECT `mouse`, `page`, `section`, `step`, `user_id`, `group` FROM `action` INNER JOIN `user` ON `user_id` = `user`.`id` WHERE done = 1 AND page = "test" ORDER BY `action`.`id`');
	if(is_object($result)){
		while ($row = $result->fetch_row()) {
			$key = $row[1]."_".$row[2]."_".$row[3];
			if(!array_key_exists($key, $json)){
				$json[$key] = array("key" => $key, "data" => array());
			}
			
			if(substr($row[0], -2) != "]}"){
				$last = my_strrpos($row[0], "},{");
				$row[0] = substr($row[0], 0, $last+1)."]}";
			}

			$d = json_decode($row[0]);
			if(is_object($d)){
				$d = $d->data;
			}else{
				$d = array();
			}

			array_push($json[$key]["data"], array(
				"user_id" => $row[4],
				"group" => $row[5],
				"interactions" => $d
			));
		}
	}

	$tjson = array();
	foreach ($json as $page) {
		array_push($tjson, $page);
	}

	echo json_encode($tjson);

?>