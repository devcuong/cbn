<style>
.box-title-page{
	text-transform: uppercase;
}
</style>
<div class="container">
<?php while ($row = mysqli_fetch_array($data["Member"])){?>
	<div class="row">
		<div class="col-md-9">
			<div class="page-heading d-flex">
				<h4 class="box-title-page mr-auto">PROFILE - <?php echo $row["username"] ?></h4>
			</div>
			
		</div>
		<div class="col-md-3">afad</div>
	</div>
	<?php } ?>
</div>
