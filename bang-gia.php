<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bảng Giá - Gạo Sịn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/gt.css">
	<link rel="stylesheet" href="css/bg.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<?php 
		include "includes/header.php"
	 ?>
	<?php 
		include "includes/icon.php"
	 ?>
	<br><br><br>
	<section class="BangGia">
		<?php 
			include "includes/banggia_index.php";
			include "includes/huongdan_index.php";
		 ?>
	</section>
	<?php 
		include "includes/footer.php"
	 ?>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
