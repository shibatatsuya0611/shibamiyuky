<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang hiển thị sản phẩm - Gạo Sịn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/gt.css">
	<link rel="stylesheet" href="css/purchase.css">
</head>
<body>
	<?php 
		require_once("includes/connection.php");
		include "includes/header.php"
	?>
	<?php 
		include "includes/icon.php"
	?>
	<br>
	<?php
		// Lấy 16 bài viết mới nhất đã được phép public ra ngoài từ bảng posts
		$sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp asc";
		// Thực hiện truy vấn data thông qua hàm mysqli_query
		// Muốn lấy sản phẩm mới nhất thì thay "asc" = "desc"
		$query = mysqli_query($conn,$sql);
	?>
	<?php
	//Lọc Sản Phẩm 
		if(isset($_GET["filter"])){
			$filter = $_GET["filter"];
			if($filter == "AZ"){
				$key = "ten_sp ASC";
			}
			if($filter == "ZA"){
				$key = "ten_sp DESC";
			}
			if($filter == "price-high"){
				$key = "gia_sp DESC";
			}
			if($filter == "price-low"){
				$key = "gia_sp ASC";
			}
			if($filter == "newest"){
				$key = "ngaytao_sp DESC";
			}
			if($filter == "oldest"){
				$key = "ngaytao_sp ASC";
			}
			$sql = "SELECT * FROM sanpham WHERE 1 ORDER BY ".$key;
			$query = mysqli_query($conn,$sql);
		}
	 ?>
	 <?php 
	 	if(isset($_GET["catalog"])){
	 		$catalog = $_GET["catalog"];
	 		if($catalog == "gao-nep"){
	 			$key = "Gạo Nếp";
	 		}
	 		if($catalog == "gao-te"){
	 			$key = "Gạo Tẻ";
	 		}
	 		if($catalog == "khac"){
	 			$key = "Khác";
	 		}
	 		$sql = "SELECT * FROM sanpham WHERE loai_sp = '$key'";
	 		$query = mysqli_query($conn,$sql);
	 	}
	  ?>
	<section class="container SanPham">
		<div class="row">
			<div class="col-md-12 title">
				<h2>Sản Phẩm của chúng tôi:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="form locsp">
					<?php include "includes/loc-sp.php" ?>
				</div>
				<table>
					<tr>
						<?php  	
						$i=0;
						while ($data = mysqli_fetch_array($query)){
							if ($i == 3){
								echo "</tr>";
								$i = 0;
							}
							?>
							<td  class="container col-md-4">
								<div class="thumbnail">
									<a href="display.php?id=<?php echo $data["id_sp"]; ?>"></a><img src="img/<?php echo $data["img_sp"]; ?>" alt="Ảnh Gạo <?php echo $data["id_sp"] ?>"></a>
									<div class="caption">
										<a href="display.php?id=<?php echo $data["id_sp"]; ?>"><h3><?php echo $data["ten_sp"] ?></h3></a>
										<p><?php echo substr($data["dt_sp"], 0, 100)."..."; ?></p>
										<p><?php echo "Giá: ", $data["gia_sp"]; ?></p>
										<a href="display.php?id=<?php echo $data['id_sp']; ?>" class="btn btn-info" role="button" >Đặt Hàng</a>
									</div>
								</div>
							</td>
							<?php 
							$i++;
						}
						?>
					</table>
				</div>
				<div class="col-md-3">
					<h3>Sản phẩm theo loại:</h3>
					<div class="phanloai">
						<ul>
							<li><a href="purchase.php?catalog=gao-nep">Gạo Nếp</a></li>
							<li><a href="purchase.php?catalog=gao-te">Gạo Tẻ</a></li>
							<li><a href="purchase.php?catalog=khac">Các loại khác</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<?php 
		include "includes/footer.php"
	?>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
