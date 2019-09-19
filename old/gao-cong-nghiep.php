<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bài Tập Lớn</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/gcn.css">
</head>
<body>
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
						<a class="navbar-brand" href="index.html">
							<img src="img/logo.png" alt="LOGO" style="width: 200px; height: 110px;">
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="gioi-thieu.html">Giới Thiệu</a></li>
								<li><a href="bang-gia.html">Bảng Giá</a></li>
								<li><a href="purchase.html">Mua Hàng</a></li>
								<li><a href="hoi-dap.html">Hỏi Đáp</a></li>
								<li><a href="bang-gia.html#HuongDan">Liên Hệ</a></li>
								<li class="dropdown nav navbar-nav">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="gao-cong-nghiep.html">Gạo Công Nghiệp</a></li>
										<li><a href="gao-tieu-chuan.html">Gạo Tiêu Chuẩn</a></li>
										<li><a href="gao-nep.html">Gạo Nếp</a></li>
										<li><a href="gao-tam.html">Gạo Tấm</a></li>
									</ul>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="button">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nhập gạo bạn muốn tìm	">
								</div>
								<a href="purchase.html">
									<button type="button" class="btn btn-success">Tìm</button>
								</a>
							</form>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div> <br><br>
	<section class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="img/sp1.png" alt="Ảnh Sản Phẩm 1" class="img-thumbnail">
			</div>
			<div class="col-md-4">
				<h2>Gạo Công Nghiệp</h2><br>
				<input type="hidden" value="Gạo Công Nghiệp" id="tenGao">
				<h4>Đánh Giá: <span style="color: #187ffe;"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></h4>
				<h4>Giá: 10.000đ/kg </h4>
				<input type="hidden" value="10.000" id="donGia">
				<h4>Đặc Tính: Nở Xốp, Nguội Mềm Cơm.</h4>
				<a href="https://m.me/100008357112100" target="_blank">
					<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-envelope"></i>  Message us on Facebook</button>
				</a>
				<div class="input-group SoLuong">
					<span class="input-group-addon">Số lượng:</span>
					<input type="text" class="form-control" placeholder="VD: 250" id="SoLuong" oninput="tt()">
					<span class="input-group-addon">.Kg</span>
				</div>
				<div class="input-group ThanhTien">
					<span class="input-group-addon">Thành Tiền</span>
					<input type="text" class="form-control" id="ThanhTien" disabled="disabled">	
					<span class="input-group-addon">VNĐ</span>
				</div>
				<h3>Loại Bao</h3>
				<div class="radio">
					<label><input type="radio" name="optradio" value="Bao Thường" checked="actived">Bao Thường</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="optradio" value="Bao Đẹp">Bao Đẹp</label>
				</div>
				<div class="radio disabled">
					<label><input type="radio" name="optradio" disabled>Bao "Gạo Sịn"(Coming up)</label>
				</div>
				<h3>Yêu cầu thêm:</h3>
				<div class="form-group">
					<textarea class="form-control" rows="3" id="comment" maxlength="300"></textarea>
				</div>
				<a href="checkout.php">
				<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>   Mua Hàng</button></a><br><br><br>
			</div>
			<div class="col-md-4"><br><br><br>
				<center>
					<h4>CÁC SẢN PHẨM KHÁC</h4>
				</center>
				<div>
					<a href="gao-cong-nghiep.html">
					<h5">Gạo Công Nghiệp</h5>
					<img src="img/sp1-other.png" alt="Ảnh sp[1]-other.png" style="margin-left: 100px; margin-bottom: -25px;" class="img-thumbnail">
				</a>
				<h5>Giá: 10.000đ/kg</h5>
				<div>
					<a href="gao-tieu-chuan.html">
					<h5">Gạo Tiêu Chuẩn</h5>
					<img src="img/sp2-other.png" alt="Ảnh sp[2]-other.png" style="margin-left: 109px; margin-bottom: -25px;" class="img-thumbnail">
				</a>
				<h5>Giá: 20.000đ/kg</h5><div>
					<a href="gao-nep.html">
					<h5">Gạo Nếp</h5>
					<img src="img/sp3-other.png" alt="Ảnh sp[3]-other.png" style="margin-left: 156px; margin-bottom: -25px;" class="img-thumbnail">
				</a>
				<h5>Giá: 15.000đ/kg</h5><div>
					<a href="gao-tam.html">
					<h5">Gạo Tấm</h5>
					<img src="img/sp4-other.png" alt="Ảnh sp[4]-other.png" style="margin-left: 153px; margin-bottom: -25px;" class="img-thumbnail">
				</a>
				<h5>Giá: 20.000đ/kg</h5>
			</div>	
		</div>	
	</div>
</section>
<section class="container">
	<div class="col-md-8">
			<div class="panel-group" id="accordion">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	          Mô Tả
        </a>
      </h3>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <h3>Mô Tả Sản Phẩm</h3>
        <p><span id="doimaumota">Tên SP:</span> Gạo Từ Thiện<br><span id="doimaumota">Trọng Lượng:</span> 10kg – 20kg – 50kg<br><span id="doimaumota">Đặc Tính:</span> Nở Xốp, Nguội Mềm Cơm.<br><span id="doimaumota">Đặc Điểm:</span> Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo.<br><span id="doimaumota">Thời Gian Sinh Trưởng:</span> 3 tháng<br><span id="doimaumota">Vùng Trồng:</span> ĐBSCL<br><span id="doimaumota">Tình Trạng:</span> Còn rất nhiều<br><br><span id="doimaumota">Cách Nấu:</span><br>Đong gạo theo nhu cầu, vo gạo vài lần bằng nước sạch(nước ấm càng tốt)<br>Chế nước theo tỉ lệ: 1 kg gạo/ 1,2 lít nước<br>Không mở nắp nồi trong lúc nấu cho đến khi cơm sôi khoảng 15p là có thể dùng bữa.<br>Dùng đũa xới cơm khi đã nấu chín<br><br><span id="doimaumota">Nhận Xét:</span><br>Gạo hương vị tự nhiên, thơm mát, mềm, cơm ngon sau khi để nguội.<br>Gạo phù hợp cho các gia đình, nhà hàng, khách sạn, cơm văn phòng.<br><br><span id="doimaumota">Bảo Quản:</span><br>Bảo quản nơi khô ráo và thoáng mát, sạch sẽ, tránh ánh nắng mặt trời.<br>Đậy kín sau khi mở bao, tránh côn trùng và mùi lạ xâm nhập.<br><span id="doimaumota">Chúc quý khách ngon miệng.</span></p>
      </div>
    </div>
  </div>

		</div>
</section>
<footer class="footer">
		<div class="container footer-LOGO">
			<div class="col-md-4">
				<a href="index.html"><img src="img/logo.png" alt="LOGO FOOTER (Khác)" style="width: 200px; height: 120px; margin-left: 60px;"></a>
				<br/><br/><br/>
				<a href="index.html"><span class="footer-a">Trang Chủ</span></a>
				<a href="bang-gia.html"><span class="footer-a">Bảng Giá</span></a>
				<a href="purchase.html"><span class="footer-a">Mua Hàng</span></a>
				<a href="bang-gia.html#HuongDan"><span class="footer-a">Liên Hệ</span></a>
			</div>
			<div class="col-md-4" id="col-md-4-mid">
				<div>
					<img src="img/map.png" alt="">
					<p><span>Số 14 P.Tân Thịnh,</span> TP.Thái Nguyên</p>
				</div>
				<div>
					<img src="img/call.png" alt="">
					<p>01653.27.01.97</p>
				</div>
				<div>
					<img src="img/mail.png" alt="">
					<p>KhanhTitICTU@gmail.com</p>
				</div>
			</div>
			<div class="col-md-4 right" id="col-md-4-mid">
				<p>Theo dõi chúng tôi qua mạng xã hội</p>
				<a href="https://goo.gl/tgN26w"><img src="img/fb.png" alt=""></a>
				<a href="https://goo.gl/gMAsXm"><img src="img/twitter.png" alt=""></a>
				<a href="https://goo.gl/lG0IxL"><img src="img/youtube.png" alt=""></a>
				<a href="https://goo.gl/Lu50k6"><img src="img/flickr.png" alt=""></a><br>
				<img src="img/bct.png" alt="" style="width: 80%; height: 80%;">
			</div>
		</div>
	</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

	function tt() {
		var SL = document.getElementById('SoLuong').value;
		document.getElementById('ThanhTien').value = SL*10000;
	}
</script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
