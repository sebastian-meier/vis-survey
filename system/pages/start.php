<div class="container">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
			<p>THIS IS NOW AUTOMATED - REMOVE IT</p>
			<form action="index.php?page=intro" method="post">
				<label>GROUP</label><br />
				<input type="radio" name="group" value="j" />&nbsp;&nbsp;Juxtaposition<br />
				<input type="radio" name="group" value="s" />&nbsp;&nbsp;Superimposition<br /><br />
				<label>SUB-GROUP</label><br />
				<input type="radio" name="subgroup" value="1" />&nbsp;&nbsp;1<br />
				<input type="radio" name="subgroup" value="2" />&nbsp;&nbsp;2<br /><br />
				<input type="submit" class="btn" value="continue" />
			</form>
		</div>
		<div class="col col-sm-1"></div>
	</div>
</div>
<script type="text/javascript">
$('form').submit(function(){
	event.preventDefault();
	if(
		$('input[name="group"]:radio').is(':checked')&&
		$('input[name="subgroup"]:radio').is(':checked')
	){
		$('input[type="submit"]').hide();
		$.post(
			'log.php',
			{
				task: 		"start",
				user_id: 	user_id,
				group : 	$('input[name="group"]:checked').val(),
				subgroup : 	$('input[name="subgroup"]:checked').val()
			},
			function(returnedData){
				logAndProceed();
			}
		);
	}else{
		alert("Please select a group and a subgroup.");
	}
});
</script>