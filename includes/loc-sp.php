<form action="purchase.php" method="POST" role="form">
	<div class="form-group">
		<label for="">Lọc Sản Phẩm:</label>
		<div class="btn-group">
			<button type="button" class="btn btn-default">Tên</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li class="divider"></li>
				<li><a href="purchase.php?filter=AZ" name="az">A -> Z<i class="glyphicon glyphicon-sort-by-alphabet"></i></a></li>
				<li><a href="purchase.php?filter=ZA" name="az">Z -> A<i class="glyphicon glyphicon-sort-by-alphabet-alt"></i></a></li>
				<li class="divider"></li>
			</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-default">Giá</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li class="divider"></li>
				<li><a href="purchase.php?filter=price-low">Thấp -> Cao<i class="glyphicon glyphicon-sort-by-order"></i></a></li>
				<li><a href="purchase.php?filter=price-high">Cao -> Thấp<i class="glyphicon glyphicon-sort-by-order-alt"></i></a></li>
				<li class="divider"></li>
			</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-default">Ngày</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li class="divider"></li>
				<li><a href="purchase.php?filter=newest">Mới -> Cũ<i class="glyphicon glyphicon-sort-by-attributes"></i></a></li>
				<li><a href="purchase.php?filter=oldest">Cũ -> Mới<i class="glyphicon glyphicon-sort-by-attributes-alt"></i></a></li>
				<li class="divider"></li>
			</ul>
		</div>
		<a href="purchase.php"><button type="button" class="btn btn-default">Huỷ Lọc<i class="glyphicon glyphicon-remove-sign"></i></button></a>
	</div>
</form>