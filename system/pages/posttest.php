<form action="index.php?page=end" method="post">
	<div class="container">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
<?php

$i = 1;
foreach ($config[$page]["questions"] as $question) {
	echo formElement($question, "postquestion_".$i);
	$i++;
}

?>
		</div>
		<div class="col col-sm-1"></div>
	</div>
	<input type="submit" class="btn" value="continue" id="continue" />
</div>
</form>
<script type="text/javascript">

$('.btn-nasa').on('click', function(){
	$(this).parent().find('.btn').removeClass('primary');
	$(this).addClass("primary");
});

$('form').submit(function(){
	event.preventDefault();
	//$('#continue').hide();
	$.post(
		'log.php',
		{
			task: 		"posttest",
			user_id: 	user_id,
			nasa_1: 	$('#postquestion_1 .primary').attr("data"),
			nasa_2: 	$('#postquestion_2 .primary').attr("data"),
			nasa_3: 	$('#postquestion_3 .primary').attr("data"),
			nasa_4: 	$('#postquestion_4 .primary').attr("data"),
			nasa_5: 	$('#postquestion_5 .primary').attr("data"),
			age: 		$('input[name="postquestion_7"]').val(),
			gender: 	$('input[name="postquestion_8"]:checked').val(),
			program: 	$('input[name="postquestion_9"]:checked').val(),
			program_type: 	$('input[name="postquestion_10"]').val(),
			bachelor: 	$('input[name="postquestion_11"]').val(),
			awareness: 	$('input[name="postquestion_12"]:checked').val(),
			software: 	$('input[name="postquestion_13"]:checked').val(),
			software_list: 	$('textarea[name="postquestion_14"]').val(),
			living_chicago: 	$('input[name="postquestion_15"]:checked').val(),
			chicago: 	$('input[name="postquestion_16"]:checked').val(),
			crimedata: 	$('input[name="postquestion_17"]:checked').val(),
			comment: 	$('textarea[name="postquestion_18"]').val()
		},
		function(returnedData){
			logAndProceed();
		}
	);
});
</script>