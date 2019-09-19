<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chỉnh Sửa Thông Tin Thành Viên - ADMIN</title>
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
		$id = -1;
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		$sql = "SELECT * FROM user WHERE id_user = ".$id;
		$query = mysqli_query($conn,$sql);
	 ?>
	 <?php
		while ( $data = mysqli_fetch_array($query) ) {
			$id = $data['id_user'];
			$is_block = "";
			if ($data['is_block_user'] == 1) {
				$is_block = 'checked="checked"';
			}
	?>
	<?php 
		function make_permission_dropdown($id){
		$select_1 = "";
		$select_2 = "";
		$select_3 = "";
		if ($id == 0) {
			$select_1 = 'selected = "selected"';
		}
		if ($id == 1) {
			$select_2 = 'selected = "selected"';
		}
		if ($id == 2) {
			$select_3 = 'selected = "selected"';
		}
		$select = '<select name="permission" id="input" class="form-control" required="required">
									<option value="0" '.$select_1.'>Thành Viên</option>
									<option value="1" '.$select_2.'>Cộng Tác Viên</option>
									<option value="2" '.$select_3.'>Quản Trị Viên</option>
								</select>';

		return $select;
		} 
	?>
	<?php 
		if(isset($_POST["btn-submit"])){
			//Lấy thông tin form
			$name = $_POST["fullname"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			$permission = $_POST["permission"];
			$is_block = 0;
			if(isset($_POST["is_block"])){
				$is_block = 1;
			}
			$id = $_POST["id_user"];
			$sql = "UPDATE user SET fullname_user = '$name', email_user = '$email', phone_user = '$phone', add_user = '$address', is_block_user = '$is_block', permision_user = '$permission' WHERE id_user = $id";
			mysqli_query($conn,$sql);
			header('Location: ql-tv.php');
		}
	 ?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Chỉnh Sửa Thông Tin Thành Viên Của Admin</h2><br><br>
				<form action="edit-user.php?id=<?php echo $id; ?>" method="POST" role="form">
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
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Quyền:</label>
								<?php
									echo make_permission_dropdown($data['permision_user']); 
								?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Block User:</label><br>
								<input type="checkbox" value="1" name="is_block" <?php echo $is_block; ?>>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" name="btn-submit" onclick="btnsuauser()">Cập nhật thông tin</button>
				</form>
				<?php 
					}
					//Đóng duyệt bảng để lấy dữ liệu
				 ?>
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