<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="asignment.css">
</head>
<body>
	<div>
		<nav>
		<div class="wraper">
		<div class="logo">
			<?php if (isset($_GET['error'])) { ?>
            	<p>Hello<?php echo $_GET['error']; ?> !</p>
            <?php } ?>
			<a href="#">AppStore</a>
		</div>
		<input type="radio" name="slide" id="menu_btn">
		<input type="radio" name="slide" id="cancel_btn">
		<ul class="nav_link">
			<label for="cancel_btn" class="btn cancel_btn"><i class="fas fa-times"></i></label>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#" class="destop_item">All Product</a>
				<input type="checkbox" id="show_drop">
				<label for="show_drop" class="mobile_item">All Product</label>
				<ul class="drop_menu">
					<li><a href="#">Computers</a></li>
					<li><a href="#">Watch</a></li>
					<li><a href="#">Điện thoại</a></li>
					<li><a href="#">Macbook</a></li>
				</ul>
			</li>
			<li><a href="#" class="destop_item">Product</a>
				<input type="checkbox" id="show_mega">
				<label for="show_mega" class="mobile_item">Product</label>
				<div class="mega_box">
					<div class="mega_box_content">
						<div class="mega_box_row">
							<?php echo "<img src='$linkImg'>" ?>
						</div>
						<div class="mega_box_row">
							<header>Laptop</header>
								<ul class="mega_box_link">
									<li><a href="#">Macbook</a></li>
									<li><a href="#">Laptop Acer</a></li>
									<li><a href="#">Laptop MSI</a></li>
									<li><a href="#">Laptop LG</a></li>
								</ul>
						</div>
						<div class="mega_box_row">
							<header>PC Gamming</header>
								<ul class="mega_box_link">
									<li><a href="#">PC Dell</a></li>
									<li><a href="#">PC HP</a></li>
									<li><a href="#">PC Lenovo</a></li>
									<li><a href="#">PC Asus</a></li>
								</ul>
						</div>
						<div class="mega_box_row">
							<header>PC Office</header>
								<ul class="mega_box_link">
									<li><a href="#">PC HNC</a></li>
									<li><a href="#">PC Acer</a></li>
									<li><a href="#">PC MSI</a></li>
									<li><a href="#">PC HP</a></li>
								</ul>
						</div>
					</div>
				</div>
			</li>
			<li><a href="#">Feedback</a></li>
		</ul>
		<label for="menu_btn" class="btn menu_btn"><i class="fas fa-bars"></i></label>
	</nav>
	</div>

	</div>
	<div class="load_img">
		<?php 
		$conect = mysqli_connect('localhost', 'root', '', 'mysqlsever');
		if (!$conect) {
			echo "kết nối thất bại";
		};
		$sqlSelect = "select * from product";

		$runSql = mysqli_query($conect, $sqlSelect);
		while ($row = mysqli_fetch_array($runSql)) {
			$product_ID    = $row['Product_ID'];
			$product_name  = $row['Product_Name'];
            $product_price = $row['Product_Price'];   
            $product_img   = $row['Product_Description'];   
            $categori_ID   = $row['Categori_ID'];          
              

            echo "
		    
			<h3>$product_name</h3>
			<img src='$product_img' width='180px' height='180px'>
			<p>$product_price</p>
		    " ;     
		}	
	 ?>
	</div>
	
</body>
</html>