<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chỉnh Sửa Thông Tin Thành Viên - Gạo Sịn</title>
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
		$id = $_SESSION["user_id"];
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		$sql = "SELECT * FROM user WHERE id_user = ".$id;
		$query = mysqli_query($conn,$sql);
	 ?>
	 <?php
		while ( $data = mysqli_fetch_array($query) ) {
			$id = $data['id_user'];
	?>
	<?php 
		if(isset($_POST["btn-submit"])){
			//Lấy thông tin form
			$name = $_POST["fullname"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			$permission = $_POST["permission"];
			$id = $_POST["id_user"];
			$sql = "UPDATE user SET fullname_user = '$name', email_user = '$email', phone_user = '$phone', add_user = '$address' WHERE id_user = $id";
			mysqli_query($conn,$sql);
			header('Location: info-user.php');
		}
	 ?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Chỉnh Sửa Thông Tin Thành Viên</h2><br><br>
				<div class="col-md-6">
					<img src="img/sp2.png" alt="" class="img-thumbnail"><br><br>
					<form action="info-user.php?id=<?php echo $id; ?>" method="POST" role="form">
						<input type="file" name="avatar">
					</form>
				</div>
				<div class="col-md-6">
				<form action="info-user.php?id=<?php echo $id; ?>" method="POST" role="form">
					<legend>Chỉnh sửa thông tin thành viên</legend>
					<input type="hidden" name="id_user" value="<?php echo $id; ?>">
					<div class="form-group">
						<label for="">Họ và tên:</label>
						<input type="text" class="form-control" name="fullname" placeholder="Fullname" required="" value="<?php echo $data['fullname_user']; ?>">
					</div>
					<div class="form-group">
						<label for="">Thư điện tử:</label>
						<input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo $data['email_user']; ?>">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại:</label>
						<input type="text" class="form-control" name="phone" placeholder="Phone" required="" value="<?php echo $data['phone_user']; ?>">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ:</label>
						<textarea name="address" id="" class="form-control" rows="4" placeholder="Address" required="" maxlength="100"><?php echo $data['add_user']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="btn-submit" onclick="btnsuauser()">Cập nhật thông tin</button>
				</form>
				</div>
			</div>
			<div class="col-md-2">
				<?php 
					include "includes/menu-mem.php"
				 ?>
			</div>
		</div>
		<?php 
					}
					//Đóng duyệt bảng để lấy dữ liệu
				 ?>
	</main>
	<?php 
	include "includes/footer.php"
	?>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>