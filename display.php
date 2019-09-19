<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang hiển thị chi tiết sản phẩm và mua hàng - Gạo Sịn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/gcn.css">
</head>
<body>
	<?php
		session_start(); 
		require_once("includes/connection.php");
	?>
	<?php 
		include("includes/permission-index.php"); 
	?>
	<?php
	$id = intval($_GET['id']);
	if (isset($_GET["id_sp"])) {
		$id = intval($_GET['id_sp']);
	}
	// Lấy ra nội dung bài viết theo điều kiện id
	$sql = "SELECT * FROM sanpham WHERE id_sp = $id";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql);
	//Lấy Dữ liệu ra xong
	?>
	<?php 
		//Lấy dữ liệu nhập vào bảng 'muahang'
	if(isset($_POST["btn-submit"])){
		$ten_mh = $_POST["tenmh"];
		$sl_mh = $_POST["solgmh"];
		$gia_mh = $_POST["giamh"];
		$tt_mh = $sl_mh * $gia_mh;
		$lb_mh = $_POST["radio"];
		$cm_mh = $_POST["comment"];
		$nguoimua = $_SESSION["fullname"];
		$sql = "INSERT INTO muahang (tensp_mh, solg_mh, bao_mh, dg_mh, sum_mh, comment_mh, ngmua_mh, ngaymua_mh) VALUES ('$ten_mh', '$sl_mh', '$lb_mh', '$gia_mh', '$tt_mh', '$cm_mh', '$nguoimua', now())";
		$query2 = mysqli_query($conn,$sql);
		header('Location: checkout.php');
	}
	?>
	<?php 
	include "includes/header.php"
	?>
	<br><br>
	<!-- MAIN HERE -->
	<section class="container">
		<div class="row ">
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
					?>
			<div class="col-md-4">
				<img class="img-thumbnail sp" src="img/<?php echo $data["img_sp"]; ?>" alt="Anh San Pham <?php echo $id; ?>" style="width: 350px; height: 350px;">
			</div>
			<div class="col-md-4">
					<form action="display.php?id=<?php echo $id; ?>" method="POST" role="form">
						<legend><h2><?php echo $data['ten_sp']; ?></h2></legend>
						<input type="hidden" name="tenmh" value="<?php echo $data['ten_sp']; ?>">
						<div class="form-group">
							<h4>Đánh Giá: <span style="color: #187ffe;"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></h4>
							<h4>Giá: <?php echo $data['gia_sp']; ?>đ/kg</h4>
							<input type="hidden" name="giamh" value="<?php echo $data['gia_sp']; ?>">
							<h4>Đặc tính: <?php echo $data['dt_sp']; ?></h4>
							<a href="https://m.me/100008357112100" target="_blank">
								<button type="button" class="btn btn-info">
									<i class="glyphicon glyphicon-envelope"></i>  Message us on Facebook
								</button>
							</a>
							<div class="input-group SoLuong">
								<span class="input-group-addon">Số lượng:</span>
								<input type="number" name="solgmh" class="form-control" placeholder="VD: 250" id="solg" onchange="muahangam()">
								<span class="input-group-addon">.Kg</span>
							</div>
							<h3>Loại Bao</h3>
							<div class="radio">
								<label><input type="radio" name="radio" value="Bao Thường" checked="actived">Bao Thường</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="radio" value="Bao Đẹp">Bao Đẹp</label>
							</div>
							<div class="radio disabled">
								<label><input type="radio" name="radio" disabled>Bao "Gạo Sịn"(Coming up)</label>
							</div>
							<h3>Thông tin thêm:</h3>
							<div class="form-group">
								<textarea class="form-control" rows="4" name="comment" maxlength="300"></textarea>
							</div>
						</div>
							<button type="submit" id="button" name="btn-submit" class="btn btn-success">
								<i class="glyphicon glyphicon-shopping-cart"></i>   Mua Hàng
							</button>
							<br><br><br>
					</form>
				</div>
				<div class="col-md-4">
					<?php 
					include "includes/menu-new.php"
					?>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="panel-group" id="accordion">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Mô Tả Sản Phẩm</a>
									</h3>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<?php 
											echo $data['mota_sp']; 
										?>
										Loi chua hien thi mota
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
 				<?php 
			}
			?>
		</div>
	</section>
	<?php 
	include "includes/footer.php"
	?>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>