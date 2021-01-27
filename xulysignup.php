<?php 
	include('connect.php');

	if (isset($_POST['signup'])) {
		$file =$_FILES['image']['name'];
		$file_tmp =$_FILES['image']['tmp_name'];
	    $path = "image/";
	    move_uploaded_file($file_tmp,$path.$file);
		$us = $_POST['uname'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		$sql = "insert into user values (null, '$us', '$pass', '$name', '$file')"; 
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("Location: signup.php?error=Đăng kí thành công!");
		    exit();
		} else {
			header("Location: signup.php?error=Thực hiện không thành công!");
		    exit();
		}
		
	} 
?>