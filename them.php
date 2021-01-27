<?php 
	include ('connect.php');
	$sql = "select*from categori";
	$result = mysqli_query($con, $sql);

	if (isset($_POST['add_product'])) {
		$name = $_POST['name'];

		$file =$_FILES['image']['name'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$path = "image/";
	    move_uploaded_file($file_tmp,$path.$file);
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$Categori_ID = $_POST['categori_id'];
		$info = $_POST['info'];

		$sql = "INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Price`, `quantity`, `Product_Description`, `Categori_ID`, `info`) VALUES (NULL, '$name', '$price', '$quantity', '$path$file', '$Categori_ID', '$info');";
		$result = mysqli_query($con, $sql);
		header('location: index.php?page_layout=danhsach');
	}
 ?>

<div>
	<h3>Add Product</h3>
	<form method="POST" enctype="multipart/form-data">	
		<input type="text" placeholder="Tên sản phẩm" name="name" required>
		<textarea id="" name="info"></textarea>
		<input type="file" name="image" value="Ảnh sản phẩm" required>
		<input type="text" placeholder="Giá sản phẩm" name="price" required>
		<input type="text" placeholder="Số lượng" name='quantity' required>
		<div>
		    <label for="">Danh mục</label>
		     <select name="categori_id">
		     	<?php 
		     		while ($row = mysqli_fetch_assoc($result)) {?>
		     			<option value="<?php echo $row['Categori_ID'];?>"><?php echo $row['Categori_Name'];?></option>
		     		<?php }?>
		     </select>
		</div>
		
		<input type="submit" value="Thêm" name="add_product">
	</form>
</div>