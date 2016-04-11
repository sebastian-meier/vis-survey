<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>User Study - <?php echo $_SESSION["user_group"]; ?> - <?php echo $_SESSION["user_subgroup"]; ?></title>
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
	    <link href="css/main.css" rel="stylesheet">
	    <script type="text/javascript">
	    	var user_id = <?php echo $_SESSION["user_id"]; ?>;
	    	var user_group = "<?php echo $_SESSION["user_group"]; ?>";
	    	var user_subgroup = <?php echo $_SESSION["user_subgroup"]; ?>;
	    	var page = "<?php echo $page; ?>";
	    	var section = <?php echo $section; ?>;
	    	var subsection = <?php echo $subsection; ?>;
	    	var step = <?php echo $step; ?>;
	    	var substep = <?php echo $substep; ?>;
	    </script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-ui.js"></script>
   		<script src="libs/bootstrap/js/bootstrap.min.js"></script>
   		<script src="js/main.js"></script>
    </head>
	<body class="group-<?php echo $group; ?> subgroup-<?php echo $subgroup; ?>">
		<div class="container">
			<div class="row">
				<div class="col col-sm-1"></div>
				<div class="col col-sm-10">
					<h3><?php echo $config[$page]["skyline"]; ?></h3>
					<h1><?php echo $config[$page]["headline"]; ?></h1>
					<h2><?php echo $config[$page]["subline"]; ?></h2>
					<p><?php echo $config[$page]["copy"]; ?></p>
				</div>
				<div class="col col-sm-1"></div>
			</div>
		</div>
	