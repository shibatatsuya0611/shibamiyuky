<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thanh Toán - Gạo Sịn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/gcn.css">
	<link rel="stylesheet" href="css/gt.css">
	<link rel="stylesheet" href="css/cout.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<?php
	session_start(); 
	require_once("includes/connection.php");
	?>
	<?php 
	include("includes/permission-mh.php"); 
	?>
	<?php 
	$nguoimua = $_SESSION["fullname"];
	$sql = "SELECT * FROM muahang WHERE ngmua_mh='$nguoimua' ORDER BY id_mh DESC LIMIT 1";
	$query = mysqli_query($conn,$sql);

	?>
	<?php 
	 	// Thông tin người mua tự động điền nếu đã có tài khoản và đăng nhập
	$id_user = $_SESSION["user_id"];
	$hvt = 	$_SESSION['fullname'];
	$mail = $_SESSION["email"];
	$sdt = $_SESSION["phone"];
	$dc = $_SESSION["address"];
	$huyen = $_SESSION["address"];
	$tinh = $_SESSION["address"];
	?>
	<?php 
		//Khi nguoi dung nhan nut mua hang
	if(isset($_POST["btn-submit"])){
		if($_POST["tensp_mh"] != ""){
			$tensp_tt = $_POST["tensp_mh"];
			$solg_tt = $_POST["solg_mh"];
			$bao_tt = $_POST["bao_mh"];
			$dg_tt = $_POST["dg_mh"];
			$sum_tt = $_POST["sum_mh"];
			$comment_tt = $_POST["hid-gopy"];
			$ngmua_tt = $hvt;
			$dc_tt = $dc;
			$sdt_tt = $sdt;
			$sql = "INSERT INTO thanhtoan (tensp_tt, bao_tt, solg_tt, dg_tt, sum_tt, comment_tt, ngmua_tt, diachi_tt, sdt_tt, ngaymua_tt) VALUES ('$tensp_tt', '$bao_tt', '$solg_tt', '$dg_tt', '$sum_tt', '$comment_tt', '$ngmua_tt', '$dc_tt', '$sdt', now())";
			$sql_xoa = "DELETE FROM muahang WHERE ngmua_mh = '$hvt'";
			mysqli_query($conn,$sql);
			mysqli_query($conn,$sql_xoa);
			header('Location: purchase.php');
		}
		else{
			echo "Lỗi! Bạn chưa chọn mặt hàng!";
		}
	}
	?>
	<?php 
		if (isset($_POST["btn-remove"])) {
			$sql_xoa = "DELETE FROM muahang WHERE ngmua_mh = '$hvt'";
			mysqli_query($conn,$sql_xoa);
			header('Location: purchase.php');
		}
	 ?>
	<?php 
	include "includes/header.php"
	?>
	<?php 
	include "includes/icon.php"
	?>
	
	<section class="container">
		<div class="row">
			<div class="col-md-6 infokh">
				<h2>Thông Tin Khách Hàng</h2>
				<div class="col-md-6 ttkh">
					<form action="checkout.php">
						<div class="input-group ttkh">
							<h4>* Họ và Tên:</h4>
							<input type="text" class="form-control ttkh" name="frm-ten" placeholder="VD: Nguyễn Đình Hậu" value="<?php echo $hvt; ?>" required>
						</div>
						<div class="input-group ttkh">
							<h4>* Email:</h4>
							<input type="email" class="form-control ttkh" name="frm-email" placeholder="VD: example@domain.com" value="<?php echo $mail; ?>" required>
						</div>
					</div>
					<div class="col-md-6 ttkh">
						<div class="input-group ttkh">
							<h4>Tên công ty (Tổ chức):</h4>
							<input type="text" class="form-control ttkh" name="CÔNG TY" placeholder="VD: Company">
						</div>
						<div class="input-group ttkh">
							<h4>* Điện thoại:</h4>
							<input type="tel" class="form-control ttkh" name="frm-sdt" maxlength="11" placeholder="VD: 0123456789" value="<?php echo $sdt; ?>" required>
						</div>
					</div>
					<div class="input-group ttkh">
						<h4>* Địa Chỉ:</h4>
						<input type="text" class="form-control ttkh" name="frm-dc" placeholder="Yêu cầu: Nhập đúng để giao hàng chính xác" value="<?php echo $dc; ?>" required>
					</div>
					<div class="col-md-6 ttkh">
						<div class="input-group ttkh">
							<h4>* Quận/ Huyện/ Thị xã:</h4>
							<input type="text" class="form-control ttkh" name="frm-dc" placeholder="VD: Củ Chi" value="<?php echo $dc; ?>" required>
						</div>
					</div>
					<div class="col-md-6 ttkh">
						<div class="input-group ttkh">
							<h4>* Tỉnh/ Thành phố:</h4>
							<input type="text" class="form-control ttkh" name="frm-dc" placeholder="VD: Hồ Chí Minh" value="<?php echo $huyen; ?>" required>
						</div>
					</div><br><br><br><br><br>
				<?php 
					while ( $data = mysqli_fetch_array($query) ) {
				?>
					<div class="textarea">
						<h4>Thông tin thêm:</h4>
						<textarea class="form-control ttkh disable" rows="5" style="width: 100%" placeholder="Yêu cầu thêm (Bạn đã nhập ở trang trước)" disabled><?php echo $data["comment_mh"]; ?></textarea>
					</div>
					<button type="submit" name="btn-submit" class="btn btn-info hidden"></button>
				</form>
			</div>
			<form action="checkout.php" method="POST">
			<div class="col-md-6 BillDetail">
				<!-- Hidden của Thông Tin Người Mua Hàng -->
				<input type="hidden" name="hid-gopy" value="<?php echo $data["comment_mh"]; ?>">
					<h2>Thông Tin Đơn Hàng</h2><br><br>
					<table class="table table-striped">
						<thead>
							<tr>
								<th><h4>Thông Tin</h4></th>
								<th><h4>Thuộc Tính</h4></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tên Sản Phẩm: </td>
								<td><?php echo $data["tensp_mh"]; ?></td>
								<input type="hidden" name="tensp_mh" value="<?php echo $data["tensp_mh"]; ?>">
							</tr>
							<tr>
								<td>Số Lượng(kg):</td>
								<td><?php echo $data["solg_mh"]; ?></td>
								<input type="hidden" name="solg_mh" value="<?php echo $data["solg_mh"]; ?>">
							</tr>
							<tr>
								<td>Loại Bao:</td>
								<td><?php echo $data["bao_mh"]; ?></td>
								<input type="hidden" name="bao_mh" value="<?php echo $data["bao_mh"]; ?>">
							</tr>
							<tr>
								<td>Đơn giá:</td>
								<td><?php echo $data["dg_mh"]; ?></td>
								<input type="hidden" name="dg_mh" value="<?php echo $data["dg_mh"]; ?>">
							</tr>
						</tbody>
						<thead>
							<tr>
								<th><h4>Tổng Cộng(VNĐ):</h4></th>
								<th><h4><?php echo $data["sum_mh"]; ?></h4></th>
								<input type="hidden" name="sum_mh" value="<?php echo $data["sum_mh"]; ?>">
							</tr>
						</thead>
					</table>
				</div>
				<?php
			// Đóng truy xuất dữ liệu bảng muahang
			}
			?>
			<div class="btn-over">
				<button type="submit" name="btn-submit" class="btn btn-success" onclick="ketthuc1()" style="margin-top: 40px; margin-left: 50px;"><i class="glyphicon glyphicon-ok"></i>Mua Hàng</button>
				<button type="submit" name="btn-remove" class="btn btn-danger" onclick="ketthuc()" style="margin-top: -60px; margin-left: 400px;"><i class="glyphicon glyphicon-remove"></i>Huỷ Đơn Hàng</button>
			</div>
			</form>
			<center>
				<h3 style="color: #006cff; font-weight: bold; font-size: 21px; text-transform: uppercase;">Cảm ơn Quý Khách đã mua hàng của chúng tôi.</h3>
				<a href="index.php"><img src="img/tks.webp" alt="Thanks" style="width: 8%;"></a>
				<a href="index.php"><img src="img/tks.webp" alt="Thanks" style="width: 8%;"></a>
				<a href="index.php"><img src="img/tks.webp" alt="Thanks" style="width: 8%;"></a>
			</center>
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