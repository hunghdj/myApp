<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	.container input {
		display: block;
	}
</style>
<body>
	<div class="container">
		<h3>Add Product</h3>
		<form action="xulyaddproduct.php" method="POST" enctype="multipart/form-data">	
		<input type="text" placeholder="Product Name" name="name">
		<textarea id="" name=""></textarea>
		<input type="text" placeholder="Price" name="price">
		<input type="file" name="image">
		<input type="text" value="" name="category">
		<input type="submit" value="Add" name="add_product">
		</form>
	</div>
</body>
</html>