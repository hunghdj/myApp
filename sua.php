<?php 
	include ('connect.php');
	$id = $_GET['id'];

	$sql_categori = "select*from categori";
	$result_categori = mysqli_query($con, $sql_categori);
	$sql_product = "select*from product WHERE Product_ID = $id";
	$result_product = mysqli_query($con, $sql_product);
	$row_up = mysqli_fetch_assoc($result_product);
	if (isset($_POST['sua'])) {
		$name = $_POST['name'];
		if ($_FILES['image']['name'] =='') {
			$file = $row_up['Product_Name'];
		}else {
			$file = $row_up['Product_Name'];
		}
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$Categori_ID = $_POST['categori_id'];
		$info = $_POST['info'];

		$sql = "UPDATE product SET Product_ID=NULL, Product_Name='$name', Product_Price=$price, quantity=$quantity, Product_Description='$file', Categori_ID=$Categori_ID, info='$info'";
		$result = mysqli_query($con, $sql);
		header('location: index.php?page_layout=danhsach');
	}
 ?>

<div>
	<h3>Sửa sản phẩm</h3>
	<form method="POST" enctype="multipart/form-data">	
		<input type="text" placeholder="Tên sản phẩm" name="name" required value="<?php echo $row_up['Product_Name']; ?>">
		<textarea name="info"><?php echo $row_up['info']; ?></textarea>
		<input type="file" name="image" value="Ảnh sản phẩm" required>
		<input type="text" placeholder="Giá sản phẩm" name="price" required value="<?php echo $row_up['Product_Price']; ?>">
		<input type="text" placeholder="Số lượng" name='quantity' required value="<?php echo $row_up['quantity']; ?>">
		<div>
		    <label for="">Danh mục</label>
		     <select name="categori_id">
		     	<?php 
		     		while ($row = mysqli_fetch_assoc($result_categori)) {?>
		     			<option value="<?php echo $row['Categori_ID'];?>"><?php echo $row['Categori_Name'];?></option>
		     		<?php }?>
		     </select>
		</div>
		
		<input type="submit" value="Sửa" name="sua">
	</form>
</div>