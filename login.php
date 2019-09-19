<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/webstyle.css">
</head>
<body>
	<?php
	session_start();
	?>
	<?php 
		require_once("includes/connection.php")
	?>
	<?php 
	if(isset($_POST["btn_submit"])){
	 		//Lấy thông tin người dùng nhập vào và ấn vào nút đăng nhập
		$username = $_POST["username_user"];
		$password = $_POST["password_user"];
		$md5_pass = md5($password);
	 		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
			//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if($username == "" || $password == ""){
			echo "Tài khoản và mật khẩu không được để trống!";
		}
		else{
			$sql = "SELECT * FROM user WHERE username_user = '$username' and password_user = '$md5_pass' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "Tên đăng nhập hoặc mật khẩu không đúng !";
			}
			else{
				// Lấy ra thông tin người dùng và lưu vào session
				while ( $data = mysqli_fetch_array($query) ) {
					$_SESSION["user_id"] = $data["id_user"];
					$_SESSION['username'] = $data["username_user"];
					$_SESSION["email"] = $data["email_user"];
					$_SESSION["fullname"] = $data["fullname_user"];
					$_SESSION["phone"] = $data["phone_user"];
					$_SESSION["address"] = $data["add_user"];
					$_SESSION["is_block"] = $data["is_block_user"];
					$_SESSION["permision"] = $data["permision_user"];
				}
				// Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
				header('Location: index.php');
			}
		}
	}
	?>
	<div class="container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-4 frmLogin col-md-offset-4">
				<form action="" method="POST" role="form">
					<legend>Đăng nhập</legend>
					<div class="form-group">
						<label for="">Tài khoản</label>
						<input type="text" class="form-control" name="username_user" placeholder="Username">
						<label for="">Mật khẩu</label>
						<input type="password" class="form-control" name="password_user" placeholder="Password">
					</div>
					<label class="checkbox">
						<input type="checkbox" value="remember-me"> Remember me
					</label>
					<center>
						<button type="submit" class="btn btn-success" name="btn_submit">Đăng nhập</button>
						<a href="register.php"><button type="button" class="btn btn-primary">Đăng ký</button></a>
					</center>
				</form>
			</div>
			<div class="row">
				<div class="col-md-4 frmLogin col-md-offset-4"  style="margin-top: 20px;">
					<a href="index.php"><button type="button" class="btn btn-info" style="width: 100%">Trang Chủ</button></a>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>