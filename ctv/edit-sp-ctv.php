<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CHỈNH SỬA SẢN PHẨM - CỘNG TÁC VIÊN</title>
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
		$id = -1;
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		$sql = "SELECT * FROM sanpham WHERE id_sp = ".$id;
		$query = mysqli_query($conn,$sql);
	 ?>
	 <?php
		while ( $data = mysqli_fetch_array($query) ) {
			$id = $data['id_sp'];
		?>
	 <?php 
	 	if(isset($_POST["btn-submit"])){
	 		$title = $_POST["ten_sp"];
	 		$price = $_POST["gia_sp"];
	 		$chara = $_POST["dt_sp"];
	 		$descrip = $_POST["post_content"];
	 		$sql = "UPDATE sanpham SET ten_sp = '$title', gia_sp = '$price', dt_sp = '$chara', mota_sp = '$descrip', ngaysua_sp = now() WHERE id_sp = $id";
	 		// thực thi câu $sql với biến conn lấy từ file connection.php
	 		mysqli_query($conn,$sql);
	 		header('Location: ql-sp-ctv.php');
	 	}
	  ?>

	 <main class="container">
	 	<div class="row">
	 		<div class="col-md-10">
	 			<h2 style="color: red; font-weight: bold">Trang thêm sản phẩm của CTV</h2><br><br>
	 			<form action="edit-sp-ctv.php?id=<?php echo $id; ?>" method="POST" role="form">
	 				<legend>Yêu cầu CTV nhập đầy đủ thông tin cho sản phầm</legend>
	 				<div class="form-group">
	 					<label for="">Tên sản phẩm:</label>
	 					<input type="text" class="form-control" name="ten_sp" placeholder="Tên sản phẩm" required="" value="<?php echo $data['ten_sp']; ?>">
	 					<label for="">Giá tiền:</label>
	 					<input type="number" class="form-control" name="gia_sp" placeholder="Giá tiền" required="" value="<?php echo $data['gia_sp']; ?>">
	 					<label for="">Đặc tính: </label>
	 					<input type="text" class="form-control" name="dt_sp" placeholder="Đặc tính" required="" value="<?php echo $data['dt_sp']; ?>">
	 					<label for="">Mô Tả:</label>
	 					<textarea name="post_content" id="post_content" class="form-control" rows="15" required="" placeholder="Mô tả sản phẩm"><?php echo $data['mota_sp']; ?></textarea>
	 				</div>
	 				<button type="submit" class="btn btn-primary" name="btn-submit" onclick="btnsuasp()">Cập nhật thông tin</button>
	 			</form>
	 		</div>
	 		<div class="col-md-2">
	 			<?php 
					include "../includes/menu-ctv.php"
				 ?>
	 		</div>
	 	</div>
	 	<?php 
			 }
			 //Đóng duyệt bảng để lấy dữ liệu
	 	?>

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
