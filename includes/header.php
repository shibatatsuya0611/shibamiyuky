<?php require_once("connection.php"); ?>
<?php 
	$sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp ASC LIMIT 4";
	$sql_bg = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp ASC";
	$query_header = mysqli_query($conn,$sql);
	$query_sp = mysqli_query($conn,$sql);
	$query_bg = mysqli_query($conn,$sql_bg);
 ?>
<div class="container-fluid" id="head">
	<header class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
						<img src="img/logo.png" alt="LOGO" style="width: 200px; height: 110px;">
					</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="gioi-thieu.php"><i class="glyphicon glyphicon-credit-card"></i>Giới Thiệu</a></li>
							<li><a href="bang-gia.php"><i class="glyphicon glyphicon-list-alt"></i>Bảng Giá</a></li>
							<li><a href="purchase.php"><i class="glyphicon glyphicon-shopping-cart"></i>Mua Hàng</a></li>
							<li><a href="hoi-dap.php"><i class="glyphicon glyphicon-question-sign"></i>Hỏi Đáp</a></li>
								<li><a href="info-user.php"><i class="glyphicon glyphicon-user"></i>Account</a></li>
							</li>

						</ul>
						<form action="search.php" method="POST" class="navbar-form navbar-left" role="form">
							<div class="form-group">
								<input type="text" class="form-control" name="search" placeholder="Nhập gạo bạn muốn tìm	" required="">
							</div>
								<button type="submit" class="btn btn-success" name="btn-search">Tìm</button>
						</form>
					</ul>
				</div>
			</div>
		</nav>
	</header> 
</div>