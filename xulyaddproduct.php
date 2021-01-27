<?php 
	include('connect.php');

	if (isset($_POST['add_product'])) {
		$file =$_FILES['image']['name'];
		$file_tmp =$_FILES['image']['tmp_name'];
	    $path = "image/";
	    move_uploaded_file($file_tmp,$path.$file);
		$name = $_POST['name'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$sql = "insert into product values (null, '$name', '$price', '$file', '$category')"; 
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("Location: addproduct.php?error=Thêm thành công!");
		    exit();  
		} else {
			header("Location: addproduct.php?error=Thêm không thành công!");
		    exit();
		}
		
	} 
?>