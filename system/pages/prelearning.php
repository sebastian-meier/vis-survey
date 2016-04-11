<style>
	.graphic-placeholder{
		width:400px;
		height:400px;
		margin:0 auto;
		background-repeat: no-repeat;
		background-position: center;
		background-size:100% auto;
	}

	.group-j .overview-graphic,
	.group-s .overview-graphic{
		background-image:url('img/overview-graphic.png');
	}

	.group-j .low-detail-graphic{	background-image:url('img/j-low-detail-graphic.png');}
	.group-j .mid-detail-graphic{	background-image:url('img/j-mid-detail-graphic.png');}
	.group-j .high-detail-graphic{	background-image:url('img/j-high-detail-graphic.png');}

	.group-s .low-detail-graphic{	background-image:url('img/s-low-detail-graphic.png');}
	.group-s .mid-detail-graphic{	background-image:url('img/s-mid-detail-graphic.png');}
	.group-s .high-detail-graphic{	background-image:url('img/s-high-detail-graphic.png');}

</style>
<div class="container">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
			<form action="index.php?page=learning" method="post">
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