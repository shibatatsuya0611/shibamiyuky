<!DOCTYPE php>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bài Tập Lớn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body> 
	<!-- HEADER HERE -->
		<?php 
			include "includes/header.php"
		 ?>
	<!-- MAIN HERE -->
	<section class="banner">
		<?php 
			include "includes/banner_index.php" 
		?>
	</section>	
	<section class="container fixDisplay" id="Info">
		<?php 
			include "includes/info_index.php" 
		?>
	</section>
	<section class="SanPham">
		<?php 
			include "includes/sanpham_index.php" 
		?>
	</section>
	<section class="BangGia">
		<?php 
			include "includes/banggia_index.php" 
		?>
	</section>
	<section class="HuongDan">
		<?php 
			include "includes/huongdan_index.php"
		 ?>
	</section>
	<section class="CuocPhi">
		<?php 
			include "includes/cuocphi_index.php"
		 ?>
	</section>
	<!-- FOOTER HERE -->
	<?php 
		include "includes/footer.php"
	 ?>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>