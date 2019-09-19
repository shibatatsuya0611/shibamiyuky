<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QUẢN LÝ SẢN PHẨM - CỘNG TÁC VIÊN</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/webstyle.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<script src="../admin/ckeditor/ckeditor.js"></script>
</head>
<body>

	<?php 
	session_start(); 
	include "../includes/header-in.php"
	?>
	<?php require_once("../includes/connection.php"); ?>
	<?php include("../includes/permission-ctv.php") ?>
	<?php
	$name_ctv = $_SESSION['fullname'];
	$sql = "SELECT * FROM sanpham WHERE nguoitao_sp = '$name_ctv' ";
	$query = mysqli_query($conn,$sql);
	?>
	<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM sanpham WHERE id_sp = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
		header('Location: ql-sp-ctv.php');
	}
	?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Quản Lý Sản Phẩm Của Cộng Tác Viên</h2><br><br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Ảnh</th>
							<th>Tên</th>
							<th>Giá</th>
							<th>Đặc Tính</th>
							<th>Mô Tả</th>
							<th>Ngày Tạo</th>
							<th>TOOL</th>
						</tr>
					</thead> 
					<tbody>
						<?php 
						while ( $data = mysqli_fetch_array($query) ) {
							?>
							<tr>
								<td><?php echo $data["id_sp"]; ?></td>
								<td><img src="../img/<?php echo $data["img_sp"]; ?>" style="width: 50px; height: 50px;"></td>
								<td><?php echo $data["ten_sp"] ?></td>
								<td><?php echo $data["gia_sp"] ?></td>
								<td><?php echo $data["dt_sp"] ?></td>
								<td><?php echo $data["mota_sp"] ?></td>
								<td><?php echo $data["ngaytao_sp"] ?></td>
								<td>
									<a href="edit-sp-ctv.php?id=<?php echo $data["id_sp"]; ?>">Sửa</a>
									<label for="">|</label>
									<a href="ql-sp-ctv.php?id_delete=<?php echo $data["id_sp"]; ?>">Xoá</a>
								</td>
							</tr>
						<?php 
								$i++;
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-md-2"><br><br>
				<?php 
					include "../includes/menu-ctv.php"
				 ?>
			</div>
		</div>
	</main>
	<?php 
	include "../includes/footer-in.php"
	?>
	<script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>