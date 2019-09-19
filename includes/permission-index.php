<?php
$user_id = $_SESSION['user_id'];
if ($user_id == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: login.php');
}else {
		if (isset($_POST["logout"])) {
			session_destroy();
			header('Location: index.php');
		}
}
?> 
