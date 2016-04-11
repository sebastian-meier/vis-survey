<div class="container">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
			<form action="index.php?page=test" method="post">
				<input type="submit" class="btn" value="continue" />
			</form>
		</div>
		<div class="col col-sm-1"></div>
	</div>
</div>
<script type="text/javascript">
$('form').submit(function(){
	event.preventDefault();
	logAndProceed();
});
</script>