<?php

	require_once("config.php");

	$overall = 0;
	$change = 0;

	$result = query('SELECT `interactions`, `t_section`, `section`, `user_id`, `user`.`group` FROM `test` INNER JOIN `user` ON `user_id` = `user`.`id` WHERE `done` = 1 ORDER BY `section`');
	if(is_object($result)){
		while ($row = $result->fetch_row()) {
			
			$d = json_decode($row[0]);
			$d = $d->data;

			foreach ($d as $i) {
				$overall++;
				if(count($i)>2){
					$change++;
				}
			}
			
		}
	}

	echo $change."/".$overall." (".($change/$overall).")";

?>