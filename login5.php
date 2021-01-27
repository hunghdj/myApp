<?php  
	session_start();
	include('connect.php');

	if (isset($_POST['submit'])) {
		$us = $_POST['uname'];
		$pass = $_POST['pass'];
		
		$sql = "select*from user where uname = '$us' and password = '$pass'";
		$result = mysqli_query($con, $sql);
		$check_login = mysqli_num_rows($result);
		if ($check_login == 0) {
			header("Location: login.php?error=Tên đăng nhập hoặc mật khẩu sai!");
		    exit();
		} else {
			header("Location: testasm.php?error= '$us'");
		    exit();
		}
		
	}
?>
