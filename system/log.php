<?php

	session_start();

	require_once("config.php");

	switch($_POST["task"]){
		case "action":
			query('INSERT INTO action (`user_id`, `page`, `subsection`, `section`, `step`, `substep`, `time`, `start`, `end`, `mouse`)VALUES('.$_POST["user_id"].', "'.$_POST["page"].'", '.intval($_POST["subsection"]).', '.intval($_POST["section"]).', '.intval($_POST["step"]).', '.intval($_POST["substep"]).', '.intval($_POST["time"]).', "'.$_POST["start"].'", "'.$_POST["end"].'", \''.$_POST["mouse"].'\')');
			if($_POST["page"] == "bonus"){
				query('UPDATE user SET done = 1 WHERE id = '.intval($_POST["user_id"]));
			}
		break;
		case "start":
			$_SESSION["group"] = $_POST["group"];
			$_SESSION["g"] = $_POST["group"];
			$_SESSION["subgroup"] = $_POST["subgroup"];
			query('UPDATE user SET `group` = "'.$_POST["group"].'", `subgroup` = '.$_POST["subgroup"].' WHERE id = '.$_POST["user_id"]);
		break;
		case "learning":
			$_SESSION["answer"] = $_POST["answer"];
			query('INSERT INTO learning (`user_id`, `section`, `subsection`, `step`, `substep`, `answer`, `correct_answer`, `time`)VALUES('.$_POST["user_id"].', '.intval($_POST["section"]).', '.intval($_POST["subsection"]).', '.intval($_POST["step"]).', '.intval($_POST["substep"]).', "'.$_POST["answer"].'", "'.$_POST["correct_answer"].'", '.intval($_POST["time"]).')');
		break;
		case "test":
			query('INSERT INTO test (
					`group`,`subgroup`,`perspectivechange`,`candidate`,`user_id`,`section`,`t_section`,`sm_1`,`sm_2`,`sm_3`,`sm_4`,`sm_5`,`sm_6`,`sm_7`,`sm_8`,`sm_9`,`sm_10`,`sm_11`,`sm_12`,`sm_13`,`sm_14`,`sm_15`,`sm_16`,`sm_17`,`sm_18`,`sm_g_1`,`sm_g_2`,`sm_g_3`,`sm_g_4`,`sm_g_5`,`sm_g_6`,`sm_g_7`,`sm_g_8`,`sm_g_9`,`sm_g_10`,`sm_g_11`,`sm_g_12`,`sm_g_13`,`sm_g_14`,`sm_g_15`,`sm_g_16`,`sm_g_17`,`sm_g_18`,`interactions`,`why_time`,`why_space`,`why_desc`,`why_no`,`time`
				)VALUES(
					"'.$_POST["group"].'",'.intval($_POST["subgroup"]).',"'.$_POST["perspectivechange"].'","'.$_POST["candidate"].'",'.intval($_POST["user_id"]).','.intval($_POST["section"]).','.intval($_POST["t_section"]).','.intval($_POST["sm_1"]).','.intval($_POST["sm_2"]).','.intval($_POST["sm_3"]).','.intval($_POST["sm_4"]).','.intval($_POST["sm_5"]).','.intval($_POST["sm_6"]).','.intval($_POST["sm_7"]).','.intval($_POST["sm_8"]).','.intval($_POST["sm_9"]).','.intval($_POST["sm_10"]).','.intval($_POST["sm_11"]).','.intval($_POST["sm_12"]).','.intval($_POST["sm_13"]).','.intval($_POST["sm_14"]).','.intval($_POST["sm_15"]).','.intval($_POST["sm_16"]).','.intval($_POST["sm_17"]).','.intval($_POST["sm_18"]).','.intval($_POST["sm_g_1"]).','.intval($_POST["sm_g_2"]).','.intval($_POST["sm_g_3"]).','.intval($_POST["sm_g_4"]).','.intval($_POST["sm_g_5"]).','.intval($_POST["sm_g_6"]).','.intval($_POST["sm_g_7"]).','.intval($_POST["sm_g_8"]).','.intval($_POST["sm_g_9"]).','.intval($_POST["sm_g_10"]).','.intval($_POST["sm_g_11"]).','.intval($_POST["sm_g_12"]).','.intval($_POST["sm_g_13"]).','.intval($_POST["sm_g_14"]).','.intval($_POST["sm_g_15"]).','.intval($_POST["sm_g_16"]).','.intval($_POST["sm_g_17"]).','.intval($_POST["sm_g_18"]).', \''.$_POST["interactions"].'\','.intval($_POST["why_time"]).','.intval($_POST["why_space"]).','.intval($_POST["why_desc"]).','.intval($_POST["why_no"]).','.intval($_POST["time"]).')');
		break;
		case "posttest":
			query('INSERT INTO post_test (
					`comment`,`user_id`,`nasa_1`,`nasa_2`,`nasa_3`,`nasa_4`,`nasa_5`,`age`,`gender`,`program`,`program_type`,`bachelor`,`awareness`,`software`,`software_list`,`living_chicago`,`chicago`,`crimedata`
				)VALUES(
					"'.$_POST["comment"].'",'.$_POST["user_id"].','.intval($_POST["nasa_1"]).','.intval($_POST["nasa_2"]).','.intval($_POST["nasa_3"]).','.intval($_POST["nasa_4"]).','.intval($_POST["nasa_5"]).',"'.$_POST["age"].'","'.$_POST["gender"].'","'.$_POST["program"].'","'.$_POST["program_type"].'","'.$_POST["bachelor"].'","'.$_POST["awareness"].'","'.$_POST["software"].'","'.$_POST["software_list"].'","'.$_POST["living_chicago"].'","'.$_POST["chicago"].'","'.$_POST["crimedata"].'")');
		break;
	}

?>