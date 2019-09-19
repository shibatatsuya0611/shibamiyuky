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
	<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM user WHERE id_user = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
		header('Location: ql-tv.php');
	}
	?>
	<main class="container">
		<div class="row">
			<div class="col-md-10">
				<h2 style="color: red; font-weight: bold">Trang Quản Lý Thành Viên Của Admin</h2><br><br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Username</th>
							<th>Fullname</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Status</th>
							<th>Permission</th>
							<th>TOOL</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 1;
						while ( $data = mysqli_fetch_array($query) ) {
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $data["username_user"] ?></td>
								<td><?php echo $data["fullname_user"] ?></td>
								<td><?php echo $data["email_user"] ?></td>
								<td><?php echo $data["phone_user"] ?></td>
								<td><?php echo $data["add_user"] ?></td>
								<td><?php if($data['is_block_user'] == 1){
										echo '<span style="color: red">Bị khoá</span>';
									}
									else{
										echo "Hoạt động";
									}
								 ?></td>
								<td><?php if($data['permision_user'] == 0){
										echo "Member";
									} 
									elseif ($data['permision_user'] == 1) {
										echo '<span style="color: blue">CTV</span>';
									}
									else{
										echo '<span style="color: red">Admin</span>';
									}
								?></td>
								<td>
									<a href="edit-user.php?id=<?php echo $data["id_user"]; ?>">Sửa</a>
									<label for="">|</label>
									<a href="ql-tv.php?id_delete=<?php echo $data["id_user"]; ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xoá</a>
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