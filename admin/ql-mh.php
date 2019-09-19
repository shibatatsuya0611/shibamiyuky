<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QUẢN LÝ XUẤT HÀNG - ADMIN</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/webstyle.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<!-- 	<script src="ckeditor/ckeditor.js"></script> -->
</head>
<body>

	<?php 
	session_start(); 
	include "../includes/header-in.php"
	?>
	<?php require_once("../includes/connection.php"); ?>
	<?php include("../includes/permission.php") ?>
	<?php 
		$sql = "SELECT * FROM thanhtoan";
		$query = mysqli_query($conn,$sql);
	 ?>
	 <?php 
	 	//DELETE Sản phẩm đã giao hàng
	 	if(isset($_GET["id_delete"])){
	 		$sql = "DELETE FROM thanhtoan WHERE id_tt = ".$_GET["id_delete"];
	 		mysqli_query($conn,$sql);
	 		header('Location: ql-mh.php');
	 	}
	  ?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Quản Lý Xuất Hàng Của Admin</h2><br><br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên SP</th>
							<th>Loại Bao</th>
							<th>Số Lượng</th>
							<th>Đơn Giá</th>
							<th>Tổng Tiền</th>
							<th>Người Mua</th>
							<th>Địa Chỉ</th>
							<th>SĐT</th>
							<th>Ngày Mua</th>
							<th>TOOL</th>
						</tr>
					</thead>
					<?php 
					$i = 1;
						while ( $data = mysqli_fetch_array($query)) {
					 ?>
					<tbody>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data["tensp_tt"] ?></td>
							<td><?php echo $data["bao_tt"] ?></td>
							<td><?php echo $data["solg_tt"] ?></td>
							<td><?php echo $data["dg_tt"] ?></td>
							<td><?php echo $data["sum_tt"] ?></td>
							<td><?php echo $data["ngmua_tt"] ?></td>
							<td><?php echo $data["diachi_tt"] ?></td>
							<td><?php echo $data["sdt_tt"] ?></td>
							<td><?php echo $data["ngaymua_tt"] ?></td>
							<td><a href="ql-mh.php?id_delete=<?php echo $data["id_tt"]; ?>">Đã Giao</a></td>
						</tr>
					</tbody>
					<?php 
						$i++;
						}
					 ?>
				</table>
			</div>
			<div class="col-md-2"><br><br>
				<?php 
					include "../includes/menu-admin.php"
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