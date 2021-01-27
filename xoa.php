<?php 
	include ('connect.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM `product` WHERE `product`.`Product_ID` = $id";
	$result = mysqli_query($con, $sql);
	header('location: index.php?page_layout=danhsach');
 ?>