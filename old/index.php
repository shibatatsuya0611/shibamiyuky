<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QUẢN LÝ THÀNH VIÊN - ADMIN</title>
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
	$sql = "SELECT * FROM user";
	$query = mysqli_query($conn,$sql);
	?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: blue; font-weight: bold"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Trang Chức Năng Của Admin<i class="fa fa-circle-o-notch fa-spin fa-fw "></i></h2><br><br>
				<h3>Hi: <span  style="color: red; font-weight: bold"><?php echo $_SESSION["fullname"]; ?> </span>!</h3>
				<p><i class="glyphicon glyphicon-arrow-right"></i>Nhìn cái gì? Bên phải to đùng kia không nhìn! <i class="glyphicon glyphicon-arrow-left"></i></p>
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