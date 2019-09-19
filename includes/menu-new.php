<?php 
// Lấy ra 5 sản phẩm mới nhất = được thêm mới nhất = id lớn nhất
	$sql_menu = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp DESC LIMIT 5";
	$query_menu = mysqli_query($conn,$sql_menu);
 ?>

<center>
	<h4>CÁC SẢN PHẨM KHÁC MỚI NHẤT</h4>
</center>
<?php 
$i = 0;
	while ( $data = mysqli_fetch_array($query_menu) ) {
		if ($i == 3){
			$i = 0;
		}
	?>
<a href="display.php?id=<?php echo $data["id_sp"]; ?>">
	<h5"><?php echo $data["ten_sp"]; ?></h5>
	<img src="img/<?php echo $data["img_sp"]; ?>" alt="Ảnh sp[<?php echo $data["id_sp"]; ?>]-other.png" style="width: 90px; height: 55px; float: right;" class="img-thumbnail">
</a>
<h5>Giá: <?php echo $data["gia_sp"] ?>/kg</h5>
<?php 
		$i++;
	}
 ?>