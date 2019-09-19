<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bài Tập Lớn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/gt.css">
	<link rel="stylesheet" href="css/purchase.css">
</head>
<body>
	<?php 
		require_once("includes/connection.php");
		include "includes/header.php"
	?>
	<?php 
		include "includes/icon.php"
	?>
	<br>
	<?php 
		if(isset($_REQUEST["btn-search"])){
			 $search = addslashes($_POST["search"]);
			if(empty($search)){
				echo "Bạn chưa nhập dữ liệu vào ô tìm kiếm! <br>";
				echo "Vui lòng thực hiện lại!";
				$sql_sea = "SELECT * FROM sanpham WHERE ten_sp LIKE '%KHÔNG TÌM THẤY%'";
				$result = mysqli_query($conn,$sql_sea);
			}
			else{
				$sql_sea = "SELECT * FROM sanpham WHERE ten_sp LIKE '%$search%'";
				$result = mysqli_query($conn,$sql_sea);
				$num = mysqli_num_rows($result);
			}
		}
	 ?>
	<section class="container SanPham">
		<div class="row">
			<div class="col-md-12 title">
				<h2>Tìm kiếm cho từ khoá <?php echo "<span class='kqsearch'>$search</span>"; ?> có <?php echo "<span class='kqsearch'>$num</span>"; ?> kết quả:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<table>
					<tr>
						<?php 
							$i=0;
							while ($data = mysqli_fetch_array($result)){
								if ($i == 3){
									echo "</tr>";
									$i = 0;
								}
						 ?>
						 <td class="container col-md-4">
						 	<div class="thumbnail">
						 		<img src="img/<?php echo $data["img_sp"]; ?>" alt="Ảnh Gạo <?php echo $data["id_sp"] ?>">
						 		<div class="caption">
						 			<h3><?php echo $data["ten_sp"] ?></h3>
						 			<p><?php echo substr($data["dt_sp"], 0, 100)."..."; ?></p>
						 			<a href="display.php?id=<?php echo $data['id_sp']; ?>" class="btn btn-info" role="button">Đặt Hàng</a>
						 		</div>
						 	</div>
						 </td>
					 	<?php 
					 			$i++;
					 		}
					 	 ?>
				</table>
			</div>
			<div class="col-md-3">
				<a href="#"><img src="img/banner.png" alt="Banner"></a>
			</div>
		</div>
	</section>
	<?php 
		include "includes/footer.php"
	?>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
