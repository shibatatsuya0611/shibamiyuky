<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>THÊM THÀNH VIÊN - ADMIN</title>
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
	if(isset($_POST["btn-submit"])){
		$username = $_POST["username_user"];
		$password = $_POST["password_user"];
		$fullname = $_POST["fullname_user"];
		$email = $_POST["email_user"];
		$phone = $_POST["phone_user"];
		$address = $_POST["add_user"];
		$permision = $_POST["permision_user"];
		$md5_pass = md5($password);
		
		if($username == "" || $password == "" || $fullname == "" || $email == "" || $phone == "" || $address == "" || $permision == ""){
			echo "Bạn cần điền đầy đủ thông tin!";
		}
		else{
			$sql = "INSERT INTO user (username_user, password_user, fullname_user, email_user, phone_user, add_user, permision_user) VALUES ('$username', '$md5_pass', '$fullname', '$email', '$phone', '$address', '$permision')";
			$result = mysqli_query($conn,$sql);
			if(!$result){
				echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
			}
			else{
				header('Location: ql-tv.php');
			}
		}
	}
	?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Thêm Thành Viên Của Admin</h2><br><br>
				<form action="them-tv.php" method="POST" role="form">
					<legend>Điền Thông Tin Thành Viên Mới</legend>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="">Username</label>
								<input type="text" class="form-control" name="username_user" placeholder="Username">
								<label for="">Họ và Tên</label>
								<input type="text" class="form-control" name="fullname_user" placeholder="Fullname">
							</div>
							<div class="col-md-6">
								<label for="">Password</label>
								<input type="password" class="form-control" name="password_user" placeholder="Password">
								<label for="">Email</label>
								<input type="email" class="form-control" name="email_user" placeholder="Email">
							</div>
						</div>
						<div>
							<label for="">SĐT</label>
							<input type="text" class="form-control" name="phone_user" placeholder="Phone Number" maxlength="11">
							<label for="">Địa chỉ (Tỉnh)</label>
							<input type="text" class="form-control" name="add_user" placeholder="Address">
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Quyền</label>
									<select name="permision_user" id="input" class="form-control" required="required">
										<option value="0">Member</option>
										<option value="1">Cộng tác viên</option>
										<option value="2">Admin</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<button type="submit" name="btn-submit" class="btn btn-primary" style="width: 100%; margin-top: 25px; font-weight: bold;">THÊM THÀNH VIÊN</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2">
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