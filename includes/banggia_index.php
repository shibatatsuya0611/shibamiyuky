<div class="container Prices" id="BangGia">
	<div class="row">
		<div class="col-md-12">
			<h3>Bảng Giá Sản Phẩm Của Chúng Tôi</h3>
			<center><h4 style="color: #d83eff"><b>Chúng tôi luôn cung cấp giá cả cạnh tranh nhất và cập nhật hằng ngày.<br>Sản phẩm đa dạng, phong phú, khách hàng mua càng nhiều, khuyến mãi càng cao. <br>Dưới đây là bảng giá các loại gạo của chúng tôi.</b></h4></center>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="active">#</th>
						<th class="active">Loại Gạo</th>
						<th class="active">Đặc Tính</th>
						<th class="active">Giá/KG (VNĐ)</th>
					</tr>
				</thead>
				<?php 
				$i = 1;
				while ( $data = mysqli_fetch_array($query_bg)) {
					?>
					<tr>
						<td class="success"><?php echo $i; ?></td>
						<td class="success"><?php echo $data["ten_sp"]; ?></td>
						<td class="success"><?php echo $data["dt_sp"]; ?></td>
						<td class="success"><?php echo $data["gia_sp"]; ?></td>
					</tr>
					<?php 
					$i++;
				}
				?>
			</table>
		</div>
	</div>
</div>