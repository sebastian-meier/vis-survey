<style>
.small-multiple, .small-placeholder, .sm-original{
	display: block;
	width:165px;
	height:165px;
	/*border:2px solid rgba(0,0,0,0.5);*/
	background-position: center;
	background-repeat: no-repeat;
	background-size:165px 165px;
}

.small-multiple img,
.small-placeholder img,
.sm-original img,
.small-multiple object,
.small-placeholder object,
.sm-original object{
	width:100%;
	height:auto;
	float:left;
}

#group-container{
	width:1200px;
	margin: 0 auto;
}

#grouping-container{
	height:180px;
}

.small-multiple{
	cursor: pointer;
}

.small-multiple.ui-draggable-dragging{
	cursor: move;
}

.small-placeholder{
	visibility: hidden;
}

#groups{
	clear:both;
	width:650px;
	margin: 0 auto;
}

.group{
	float:left;
	width:165px;
	height:165px;
	margin-right:50px;
}

.group-holder{
	/*border:2px solid black;*/
	width:165px;
	height:165px;
	/*padding:10px 0 0 10px;*/
	/*background-image:none !important;*/
}

.group-holder.ui-state-highlight{
	background-color:#dddddd;
}

.group-holder.ui-state-hover{
	background-color:#aaaaaa;
}

p{
	max-width:800px;
}

#small-multiples{
	padding-top:40px;
	clear:both;
}

#small-multiples .btn{
	margin:10px auto 0 auto;
	display: block;
	display: none;
	float:right;
	padding:0 2px;
	font-size:10px;
	margin:2px 2px 0 3px;
}

#small-multiples .btn-container{
	float:right;
	margin-top:-163px;	
}

#first-submit .row{
	padding-top:30px;
}

.red{
	color:red;
}

#meta{
	position: fixed;
	top:20px;
	right:20px;
	font-size:20px;
	font-weight:bold;
}

#meta span{
	font-weight:normal;
	font-size:12px;
}

#continue{
	clear:both;
	display:block;
}

.border{
	border:4px solid #ccc;
	float:left;
	margin: 0 15px 15px 0;
}

.border.border-1{
	border-color:#d7e8c9;
}

.btn.ref-1{
	background-color:#d7e8c9;
}

.border.border-2{
	border-color:#ecd9ec;
}

.btn.ref-2{
	background-color:#ecd9ec;
}

.border.border-3{
	border-color:#d9e8ec;
}

.btn.ref-3{
	background-color:#d9e8ec;
}

#small-references span{
	display: block;
	padding:4px;
}

.ref-title{
	float:left;
}

.ref-counter{
	margin-top:-190px;
	margin-right:3px;
	float:right;
	font-weight:bold;
	display: none;
}

.btn.btn-primary{
	color:#000;
}

/*Hide headlines on this screen, we need more screen estate*/

h1,h2,h3{
	display: none;
}

/*These will be shown after the grouping is done*/
#post-questions{
	display: none;
	padding-top:100px;
}

.legend.orange{
	background-color:#fdb462;
}

.legend.red{
	background-color:#fb8072;
}

.legend.blue{
	background-color:#80b1d3;
}

.legend{
	border-radius: 5px;
	width:10px;
	height:10px;
	display: inline-block;
	margin-right:10px;
	margin-top:5px;
}

#post-questions label{
	padding-right:10px;
	line-height:30px;
}

#progress{
	position: fixed;
	top:20px;
	left:20px;
	font-size:20px;
	font-weight:bold;
}

</style>
<?php 

	//ADD TIMER !

	$t_section = $testcases_rand[$_SESSION["user_id"]][$section];

	$next_section = $section+1;

	if($next_section >= intval($config[$page]["count"])){
		?>
<form data-section="<?php echo $section; ?>" action="index.php?page=bonus" method="post">
		<?php
	}else{
		?>
<form data-section="<?php echo $section; ?>" action="index.php?page=test&amp;section=<?php echo $next_section; ?>" method="post">
		<?php
	}

?>
<div id="progress">Test <?php echo ($section+1); ?>/13</div>
<div id="meta">
	<span>Time remaining:</span>
	<div id="meta-time">0</div>
	<span>Small multiples to go:</span>
	<div id="meta-count">0/0</div>
</div>

<?php

	$candidate = $testcases[($subgroup+1)][($t_section+1)][0];
	$perspectivechange = $testcases[($subgroup+1)][($t_section+1)][1];
	$rand = $randomizer[$t_section];

	$pathes = array();
	$ref_pathes = array();
	$path_groups = array("a","b","c");

	foreach ($path_groups as $path_group) {
		for($i = 0; $i<7; $i++){
			$path = $config[$page]["image_path"];
			if($group == "s"){
				$g_str = "overload";
				//$path .= "allignment_overload/";
			}else{
				$g_str = "juxtapose";
				//$path .= "allignment_juxtapose/";
			}
			/*
			$path .= "testcase_".($section+1)."/";
			$path .= "group_".$path_group."/";
			$path .= "candidate_".$candidate."/";
			$path .= "perspectivechange_".$perspectivechange."/";
			$path .= "step_".$i."/";*/
			$path .= $filenames[$g_str][($t_section+1)][$candidate][$path_group][$perspectivechange][$i];
			$path .= ".svg";
			if($i==0){
				array_push($ref_pathes, $path);				
			}else{
				array_push($pathes, $path);				
			}
		}
	}

?>
<div id="grouping-container">
				<div id="groups">
<?php
				for($i = 0; $i<3; $i++){
?>
					<div class="group">Group <?php echo ($i+1); ?><div data-id="<?php echo $i; ?>" class="group-holder"><div class="border border-<?php echo ($i+1); ?>"><div class="sm-<?php echo ($i+1); ?> sm-original"><object data="<?php echo $ref_pathes[$i]; ?>"></object><span class="ref-counter">0/0</span></div></div></div></div>
<?php
				}
?>
				</div>
</div>
<div class="container" id="post-questions">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
			<div>
				<p>Which perspectives did you use for grouping?<br />
					(You can select one or more attributes.)</p><br />
				<label><span class="legend blue"></span>Time</label><input type="checkbox" name="time" /><br />
				<label><span class="legend red"></span>Space</label><input type="checkbox" name="space" /><br />
				<label><span class="legend orange"></span>Description</label><input type="checkbox" name="desc" /><br />
				<label>I don't know</label><input type="checkbox" name="no" /><br />
				<input type="submit" class="btn" value="continue" />
			</div>
		</div>
		<div class="col col-sm-1"></div>
	</div>
</div>
<div id="group-container">
				<div id="small-multiples">
<?php

	$g_id = array();

	for($i = 0; $i<18; $i++){
		$img = $pathes[$rand[$i]];
		$g_id[$i] = ceil(($rand[$i]+1)/6);
		echo '					<div class="border"><div class="small-multiple sm-'.$i.'" data-id="'.$i.'" data-active="true"><object data="'.$img.'"></object><div class="btn-container"><div class="btn btn-default ref-3">3</div><div class="btn btn-default ref-2">2</div><div class="btn btn-default ref-1">1</div></div></div></div>'."\n";
	}
?>
				</div>
</div>
<div class="container" id="first-submit">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
			<input type="button" class="btn" id="reset" value="reset small multiples" />
			<input type="submit" class="btn" id="continue" value="continue" />
		</div>
		<div class="col col-sm-1"></div>
	</div>
</div>
</form>
<script type="text/javascript">

var goodDrop = false;

var sm = [];
for(var i = 1; i<19; i++){
	sm[i] = [[0,0]];
}

$(function() {

	$('#reset').on('click',function(event){
		event.preventDefault();
		var feedback = confirm("Are you sure you want to reset the small multiples? You will have to start over.");
		if(!feedback){
			//Continue sorting
		}else{
			for(var i = 1; i<19; i++){
				sm[i].push([0,Math.abs(now-startTime)]);
			}

			$('#small-multiples .btn').removeClass('btn-primary');
			$('#small-multiples .border').removeClass('border-1').removeClass('border-2').removeClass('border-3');

			updateCount();
		}
	});

	var a = document.getElementsByTagName("object");
	for(var i = 0; i<a.length; i++){

		a[i].addEventListener("load",function(){
            var svgDoc = this.contentDocument; //get the inner DOM of alpha.svg
			var svg = svgDoc.getElementsByTagName("svg")[0];
			svg.setAttribute("viewBox", "0 0 900 900"); 
			svg.setAttribute("preserveAspectRatio","xMidYMid meet");
        },false);

	}


	$('#small-multiples .small-multiple').on("mouseover", function(e){
		$(this).find('.btn').show();
	});

	$('#small-multiples .small-multiple').on("mouseout", function(e){
		$('#small-multiples .btn').hide();
	});

	$('#small-multiples .btn').on("click", function(){
		$(this).parent().parent().find(".btn").removeClass("btn-primary");
		$(this).addClass("btn-primary");

		var tr = "";
		if($(this).hasClass("ref-1")){
			tr = 1;
		}else if($(this).hasClass("ref-2")){
			tr = 2;
		}else if($(this).hasClass("ref-3")){
			tr = 3;
		}

		sm[($(this).parent().parent().data("id")+1)].push([tr,Math.abs(now-startTime)]);

		$(this).parent().parent().parent().removeClass("border-1").removeClass("border-2").removeClass("border-3").addClass("border-"+tr);

		updateCount();
	});

	updateCount();
});

function updateCount(){
	for(var i = 1; i<4; i++){
		var c = $('#small-multiples .border-'+i).length;
		var m = 6;
		$('.sm-'+i+' .ref-counter').html(c+"/"+m);
	}

	var m = $('#small-multiples .small-multiple').length;
	var c = $('#small-multiples .btn-primary').length;
	$('#meta-count').html(c+"/"+m);
	if(c==m){
		console.log("done");
		$('#continue').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
	}
}

var count=180;

var counter=setInterval(timer, 1000);

function timer(){
	count=count-1;
	if (count <= 0){
		$('#meta-time').html("<span class='red'>"+count+"s</span>");
	}else{
		$('#meta-time').html(count+"s");
	}

}

var subsection = 0;

function showForm(){
	subsection++;
	stop = true;
	$('#post-questions').show();
	$('#meta').hide();
	$('#group-container').hide();
	$('#first-submit').hide();
}

$('form').submit(function(event){
	event.preventDefault();
	if(subsection == 0){
		var allin = true;
		for(var i = 1; i<19; i++){
			if(sm[i][(sm[i].length-1)][0]<1){
				allin = false;
			}
		}
		if(!allin){
			var feedback = confirm("Are you sure you want to continue? You haven't grouped all small multiples. If you cannot decide upon the remaining small multiples and wish to proceed, ‘click' OK. Otherwise to continue with the current grouping task, ‘click' cancel.");
			if(!feedback){
				//Continue sorting
			}else{
				showForm();
			}
		}else{
			showForm();
		}
	}else{
		if($('input[type="checkbox"]').is(':checked')){
			$('input[type="submit"]').hide();
			$.post(
				'log.php',
				{
					task: 		"test",
					user_id: 	user_id,
					section: 	section,
					t_section:  <?php echo $t_section; ?>,
					sm_1: 		sm[1][(sm[1].length-1)][0],
					sm_2: 		sm[2][(sm[2].length-1)][0],
					sm_3: 		sm[3][(sm[3].length-1)][0],
					sm_4: 		sm[4][(sm[4].length-1)][0],
					sm_5: 		sm[5][(sm[5].length-1)][0],
					sm_6: 		sm[6][(sm[6].length-1)][0],
					sm_7: 		sm[7][(sm[7].length-1)][0],
					sm_8: 		sm[8][(sm[8].length-1)][0],
					sm_9: 		sm[9][(sm[9].length-1)][0],
					sm_10: 		sm[10][(sm[10].length-1)][0],
					sm_11: 		sm[11][(sm[11].length-1)][0],
					sm_12: 		sm[12][(sm[12].length-1)][0],
					sm_13: 		sm[13][(sm[13].length-1)][0],
					sm_14: 		sm[14][(sm[14].length-1)][0],
					sm_15: 		sm[15][(sm[15].length-1)][0],
					sm_16: 		sm[16][(sm[16].length-1)][0],
					sm_17: 		sm[17][(sm[17].length-1)][0],
					sm_18: 		sm[18][(sm[18].length-1)][0],
					sm_g_1: 	<?php echo $g_id[0]; ?>,
					sm_g_2: 	<?php echo $g_id[1]; ?>,
					sm_g_3: 	<?php echo $g_id[2]; ?>,
					sm_g_4: 	<?php echo $g_id[3]; ?>,
					sm_g_5: 	<?php echo $g_id[4]; ?>,
					sm_g_6: 	<?php echo $g_id[5]; ?>,
					sm_g_7: 	<?php echo $g_id[6]; ?>,
					sm_g_8: 	<?php echo $g_id[7]; ?>,
					sm_g_9: 	<?php echo $g_id[8]; ?>,
					sm_g_10: 	<?php echo $g_id[9]; ?>,
					sm_g_11: 	<?php echo $g_id[10]; ?>,
					sm_g_12: 	<?php echo $g_id[11]; ?>,
					sm_g_13: 	<?php echo $g_id[12]; ?>,
					sm_g_14: 	<?php echo $g_id[13]; ?>,
					sm_g_15: 	<?php echo $g_id[14]; ?>,
					sm_g_16: 	<?php echo $g_id[15]; ?>,
					sm_g_17: 	<?php echo $g_id[16]; ?>,
					sm_g_18: 	<?php echo $g_id[17]; ?>,
					interactions: JSON.stringify({data:sm}),
					why_time: 	(($('input[name="time"]').is(':checked')) ? 1 : 0),
					why_space: 	(($('input[name="space"]').is(':checked')) ? 1 : 0),
					why_desc: 	(($('input[name="desc"]').is(':checked')) ? 1 : 0),
					why_no: 	(($('input[name="no"]').is(':checked')) ? 1 : 0),
					time: 		(now-start),
					candidate:"<?php echo $candidate; ?>",
					perspectivechange:"<?php echo $perspectivechange; ?>",
					group:"<?php echo $group; ?>",
					subgroup:<?php echo $subgroup; ?>
				},
				function(returnedData){
					logAndProceed();
				}
			);
		}else{
			alert("Please select one of the options.");
		}
	}
});
</script>