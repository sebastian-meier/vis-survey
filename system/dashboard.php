<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>User Study - <?php echo $_SESSION["user_group"]; ?> - <?php echo $_SESSION["user_subgroup"]; ?></title>
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
	    <link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   		<script src="libs/bootstrap/js/bootstrap.min.js"></script>
   		<style type="text/css">

   			table{
   			}

   			th{
   				font-weight:bold;
   			}

   			th,td{
   				padding:3px;
   				border:1px solid #000;
   			}

   		</style>
    </head>
	<body>
		<div class="container">
			<table>
				<thead>
					<tr>
						<th></th>
						<th colspan="27">Participants</th>
					</tr>
					<tr>
						<th></th>
						<th colspan="13">Juxtaposed</th>
						<th colspan="13">Superimposed</th>
						<th>Overall</th>
					</tr>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>Group-Sum</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>Group-Sum</th>
						<th></th>
					</tr>
				</thead>
<?php

	require_once("config.php");

	/*General Counts*/

	$result = query('SELECT `group`, `subgroup`, COUNT(*) AS `count` FROM `user` WHERE done = 1 OR created > DATE_SUB(NOW(), INTERVAL 1 HOUR) GROUP BY `group`, `subgroup`');
	if(is_object($result)){
		$j = 0;
		$s = 0;
		$o = 0;
		$g = array(
			"s" => array(),
			"j" => array()
			);
		for($i = 0; $i<12; $i++){
			$g["s"][$i] = 0;
			$g["j"][$i] = 0;
		}

		while ($row = $result->fetch_row()) {
			$g[$row[0]][$row[1]] += intval($row[2]);
		}

		drawRow($g, "Count");
	}

	/*Finishing Stages*/

	$stages = array("intro", "prelearning", /*"learning",*/ "pretest", "test", "bonus");

	foreach ($stages as $stage) {

		if($stage != "test" && $stage != "learning"){
			$result = query('SELECT `user`.`group`, `user`.`subgroup`, COUNT(*) AS `count`, `page`, `section` FROM `action` INNER JOIN `user` ON `user`.`id` = `user_id` WHERE `page` = "'.$stage.'" AND (done = 1 OR created > DATE_SUB(NOW(), INTERVAL 1 HOUR)) GROUP BY `user`.`group`, `user`.`subgroup`');
			if(is_object($result)){
				$g = array(
					"s" => array(),
					"j" => array()
					);
				for($i = 0; $i<12; $i++){
					$g["s"][$i] = 0;
					$g["j"][$i] = 0;
				}

				while ($row = $result->fetch_row()) {
					$g[$row[0]][$row[1]] += intval($row[2]);
				}

				drawRow($g, $stage);
			}
		}elseif($stage == "test"){
			for($ci = 0; $ci<12; $ci++){
				$result = query('SELECT `user`.`group`, `user`.`subgroup`, COUNT(*) AS `count`, `page`, `section` FROM `action` INNER JOIN `user` ON `user`.`id` = `user_id` WHERE `page` = "'.$stage.'" AND `section` = '.$ci.' AND (done = 1 OR created > DATE_SUB(NOW(), INTERVAL 1 HOUR)) GROUP BY `user`.`group`, `user`.`subgroup`');
				if(is_object($result)){
					$g = array(
						"s" => array(),
						"j" => array()
						);
					for($i = 0; $i<12; $i++){
						$g["s"][$i] = 0;
						$g["j"][$i] = 0;
					}

					while ($row = $result->fetch_row()) {
						$g[$row[0]][$row[1]] += intval($row[2]);
					}

					drawRow($g, $stage.":".$ci);
				}
			}
		}elseif($stage == "learning"){
			for($ci = 0; $ci<3; $ci++){
				for($j = 0; $j<3; $j++){
					$result = query('SELECT `user`.`group`, `user`.`subgroup`, COUNT(*) AS `count`, `page`, `section` FROM `action` INNER JOIN `user` ON `user`.`id` = `user_id` WHERE `page` = "'.$stage.'" AND `section` = '.$ci.' AND `step` = '.$j.' AND (done = 1 OR created > DATE_SUB(NOW(), INTERVAL 1 HOUR)) GROUP BY `user`.`group`, `user`.`subgroup`');
					if(is_object($result)){
						$g = array(
							"s" => array(),
							"j" => array()
							);
						for($i = 0; $i<12; $i++){
							$g["s"][$i] = 0;
							$g["j"][$i] = 0;
						}

						while ($row = $result->fetch_row()) {
							$g[$row[0]][$row[1]] += intval($row[2]);
						}

						drawRow($g, $stage.":".$ci.':'.$j);
					}
				}
			}
		}

	}

	function drawRow($g, $stage){
		$j = 0;
		$s = 0;

		echo '<tr><th>'.$stage.'</th>';
		foreach ($g["j"] as $value) {
			echo '<td>'.$value.'</td>';
			$j += $value;
		}
		echo '<td>'.$j.'</td>';
		foreach ($g["s"] as $value) {
			echo '<td>'.$value.'</td>';
			$s += $value;
		}
		echo '<td>'.$s.'</td>';
		echo '<td>'.($s+$j).'</td>';
		echo '</tr>';
	}

?>
				<tfoot>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>Group-Sum</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>Group-Sum</th>
						<th></th>
					</tr>
					<tr>
						<th></th>
						<th colspan="13">Juxtaposed</th>
						<th colspan="13">Superimposed</th>
						<th>Overall</th>
					</tr>
					<tr>
						<th></th>
						<th colspan="27">Participants</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</body>
</html>