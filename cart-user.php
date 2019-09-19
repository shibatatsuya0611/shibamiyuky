<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Xem Thông Tin Đơn Hàng Đã Đặt - Gạo Sịn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- 	<script src="ckeditor/ckeditor.js"></script> -->
</head>
<body>

	<?php 
	session_start(); 
	include "includes/header.php"
	?>
	<?php require_once("includes/connection.php"); ?>
	<?php include("includes/permission-index.php") ?>
	<?php 
		$name = $_SESSION["fullname"];
		if (isset($_GET['fullname'])) {
			$name = $_GET['fullname'];
		}
		$sql = "SELECT * FROM thanhtoan WHERE ngmua_tt = '$name'";
		$query = mysqli_query($conn,$sql);
	 ?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Xem Thông Tin Đơn Hàng Đã Đặt Của Thành Viên</h2><br><br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Tên Mặt Hàng</th>
							<th>Loại Bao</th>
							<th>Số Lượng</th>
							<th>Đơn Giá</th>
							<th>Tổng Tiền</th>
							<th>Ngày Mua</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 1;
						while ( $data = mysqli_fetch_array($query) ) 
							{
							 
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $data["tensp_tt"] ?></td>
							<td><?php echo $data["bao_tt"] ?></td>
							<td><?php echo $data["solg_tt"] ?></td>
							<td><?php echo $data["dg_tt"] ?></td>
							<td><?php echo $data["sum_tt"] ?></td>
							<td><?php echo $data["ngaymua_tt"] ?></td>
						</tr>
						<?php 
						$i++;
					}
					//Đóng duyệt bảng để lấy dữ liệu
				 ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-2">
				<?php 
					include "includes/menu-mem.php"
				 ?>
			</div>
		</div>
		
	</main>
	<?php 
	include "includes/footer.php"
	?>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>