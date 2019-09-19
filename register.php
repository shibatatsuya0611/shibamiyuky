<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/webstyle.css">
</head>
<body>
	<?php 
		require_once("includes/connection.php"); 
	?>
	<?php
	$sql = "SELECT username_user FROM user";
		$query = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($query);
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username_user"];
		$password = $_POST["password_user"];
		$name = $_POST["fullname_user"];
		$email = $_POST["email_user"];
		$phone = $_POST["phone_user"];
		$add = $_POST["add_user"];
		$md5_pass = md5($password);
		
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "" || $phone == "" || $add == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin!";
		}
		else 
		{
			$sqlrow = "SELECT username_user FROM user WHERE username_user = '$username'";
			$result = mysqli_query($conn,$sqlrow);
			$rowcount = mysqli_num_rows($result);
			echo $rowcount;	
			if ($rowcount == 1) {
				echo "Username của bạn đã bị trùng. Vui lòng nhập lại Username khác!";
			} else {
				$sqladd = "INSERT INTO user (username_user, password_user, fullname_user, email_user, phone_user, add_user) VALUES ('$username', '$md5_pass', '$fullname', '$email', '$phone', '$add')";
				mysqli_query($conn,$sqladd);
				echo "Tài khoản của bạn đã đăng ký thành công!<br>Hãy bấm nút 'Trang chủ' để quay lại!";
			}
							
		}
	}
?>
	<div class="container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="register.php" method="POST" role="form">
					<legend>Bạn chưa có tài khoản?<br>Đăng ký đi còn gì nữa!</legend>
					<div class="form-group">
						<div class="col-md-6">
							<label for="">* Username</label>
							<input type="text" class="form-control" name="username_user" placeholder="Username" required="">
							<label for="">* Họ và Tên</label>
							<input type="text" class="form-control" name="fullname_user" placeholder="Fullname" required="">
						</div>
						<div class="col-md-6">
							<label for="">* Password</label>
							<input type="password" class="form-control" name="password_user" placeholder="Password" required="">
							<label for="">* Email</label>
							<input type="email" class="form-control" name="email_user" placeholder="Email" required="" id="email" onchange="ktemail()">
						</div>
						<div class="abc">
							<label for="">* SĐT</label>
							<input type="text" class="form-control" name="phone_user" placeholder="Phone Number" required="" maxlength="11" onchange="ktsdt()" id="sdt">
							<label for="">* Địa chỉ (Tỉnh)</label>
							<input type="text" class="form-control" name="add_user" placeholder="Address" required="">
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-success" name="btn_submit" style="width: 49%;" id="btn-dangky">Đăng ký</button>
						<a href="login.php"><button type="button" class="btn btn-primary" style="width: 49%;">Đăng nhập</button></a>
					</center>
				</form>
				<br><a href="index.php" class="btn btn-info" style="width: 100%">Trang Chủ</a>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>