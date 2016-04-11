<?php

	require_once("config.php");

	$json = array();

	$result = query('SELECT `interactions`, `t_section`, `section`, `user_id`, `user`.`group` FROM `test` INNER JOIN `user` ON `user_id` = `user`.`id` WHERE `done` = 1 ORDER BY `section`');
	if(is_object($result)){
		while ($row = $result->fetch_row()) {
			$key = $row[2];
			if(!array_key_exists($key, $json)){
				$json[$key] = array("key" => $key, "data" => array());
			}
			
			$d = json_decode($row[0]);
			$d = $d->data;

			$sort = array();
			$array = array();
			for($i = 0; $i<count($d); $i++){
				if((is_array($d[$i]))&&(count($d[$i])>=2)){
					array_push($sort, $d[$i][1][1]);
					array_push($array, array($i, $d[$i][1][1]));
				}
			}

			array_multisort($array, $sort);

			array_push($json[$key]["data"], array(
				"user_id" => $row[3],
				"group" => $row[4],
				"interactions" => $array
			));
		}
	}else{
		print_r($result);
	}

	$tjson = array();
	foreach ($json as $page) {
		array_push($tjson, $page);
	}

	echo json_encode($tjson);

?>