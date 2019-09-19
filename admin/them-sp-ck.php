<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>THÊM SẢN PHẨM - ADMIN</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/webstyle.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<script src="ckeditor/ckeditor.js"></script>
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
	 	$title = $_POST["ten_sp"];
	 	$price = $_POST["gia_sp"];
	 	$chara = $_POST["dt_sp"];
	 	$descrip = $_POST["post_content"];
	 	$nguoitao = $_SESSION["fullname"];
	 		// Kiểm tra xem file nhập vào có phải ảnh hay không
	 		if (($_FILES['image']['type'] != "image/gif") && ($_FILES['image']['type'] != "image/png") && ($_FILES['image']['type'] != "image/jpg") && ($_FILES['image']['type'] != "image/jpeg") && ($_FILES['image']['type'] != "image/bmp"))
	 		{
	 			echo 'File Upload Bị Lỗi. Vui lòng chọn đúng định dạng ảnh!';
	 		}
	 		else{
                // ĐÃ UP FILE LÊN Ở TRONG HÀM NÀY
                move_uploaded_file($_FILES['image']['tmp_name'], '../img/'.$_FILES['image']['name']);
	 			$image = $_FILES['image']['name'];
	 			// Thêm sản phẩm có ảnh
	 			$sql = "INSERT INTO sanpham(ten_sp, img_sp, gia_sp, dt_sp, mota_sp, nguoitao_sp, ngaytao_sp) VALUES ('$title', '$image', '$price', '$chara', '$descrip', '$nguoitao', now())";
	 		// thực thi câu $sql với biến conn lấy từ file connection.php
				mysqli_query($conn,$sql);
				echo "Sản phẩm đã được thêm";
	 		}
	 }
	 ?>

	 <main class="container">
	 	<div class="row">
	 		<div class="col-md-10">
	 			<h2 style="color: red; font-weight: bold">Trang thêm sản phẩm Admin và CTV</h2><br><br>
	 			<form action="them-sp-ck.php" method="POST" role="form" enctype="multipart/form-data">
	 				<legend>Yêu cầu CTV nhập đầy đủ thông tin cho sản phầm</legend>
	 				<div class="form-group">
	 					<label for="">Tên sản phẩm:</label>
	 					<input type="text" class="form-control" name="ten_sp" placeholder="Tên sản phẩm" required="">
	 					<label for="">Giá tiền:</label>
	 					<input type="number" class="form-control" name="gia_sp" placeholder="Giá tiền" required="">
	 					<label for="">Đặc tính: </label>
	 					<input type="text" class="form-control" name="dt_sp" placeholder="Đặc tính" required="">
	 					<label for="">Mô Tả:</label>
	 					<textarea name="post_content" id="post_content" class="form-control" rows="15" required="" placeholder="Mô tả sản phẩm"></textarea>
	 					<label for="">Hình Ảnh Cho Sản Phẩm</label>
	 					<input type="file" class="form-control" name="image" required="">
	 				</div>
	 				<button type="submit" class="btn btn-primary" name="btn-submit">Thêm sản phẩm</button>
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
	 <script>
    	// Thay thế <textarea id="post_content"> với CKEditor
    	CKEDITOR.replace( 'post_content' );// tham số là biến name của textarea
	</script>
	<script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
