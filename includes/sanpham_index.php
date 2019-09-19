<div class="container Product" id="Product">
	<div class="row">
		<div class="col-md-12"><h3>Sản phẩm của chúng tôi</h3>
			<?php 
$i=1;
while ( $data = mysqli_fetch_array($query_sp)) {
	if ($i == 5){
		$i = 0;
	}
	?>

			<div class="col-md-3">
				<div class="thumbnail">
					<a href="display.php?id=<?php echo $data["id_sp"]; ?>"><img src="img/sp1.jpg" alt="Sản phẩm 1"></a>
					<div class="caption">
						<center>
							<a href="display.php?id=<?php echo $data["id_sp"]; ?>"><h4><?php echo $data["ten_sp"]; ?></h4></a>
							<p>Đặc tính: <?php echo substr($data["dt_sp"], 0, 100)."..."; ?></p>
							<p><a href="purchase.php" class="btn btn-info" role="button">Xem thêm</a> <a href="display.php?id=<?php echo $data["id_sp"]; ?>" class="btn btn-success" role="button">Đặt hàng</a></p>
						</center>
					</div>
				</div>
			</div>
<?php } ?>
		</div>
	</div>
</div>