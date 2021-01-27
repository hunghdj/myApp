<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	* {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
html {font-size: 100%;}
nav {
    position: fixed;
	background-color: #242526;
	width: 100%;
	z-index: -999;
	height: auto;
	line-height: 65px;
}
nav p {
	position: absolute;
	top: -1.5rem;
	right: -175px;
	color: white;
	opacity: 0.5;
	padding-top: 1.5rem;
	background-image: linear-gradient(90deg, black, #ccc); 
	font-family: sans-serif;
}
nav .wraper {
	position: relative;
	max-width: 1250px;
	padding: 0 3rem;
	margin: auto;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.wraper .logo a {
	color: #f2f2f2;
	text-decoration: none;
	font-size: 2rem;
	font-weight: 600;
}
.wraper .nav_link {
	display: inline-flex;
}
.nav_link li {
	list-style: none;
}
.nav_link li a {
	color: #f2f2f2;
	text-decoration: none;
	font-size: 18px;
	font-weight: 500;
	padding: 9px 15px;
	transition: all 0.3s ease;
}
.nav_link li a:hover {
	background-color: #3A3B3C;
	border-radius: 0.3rem;
}
.nav_link .drop_menu {
	background-color:  #242526;
	width: 180px;
	top: 85px;
	position: absolute;
	line-height: 45px;
	opacity: 0;
	visibility: hidden;
}
.nav_link li:hover .drop_menu {
	opacity: 1;
	visibility: visible;
	top: 65px;
	transition: all 0.5s ease;
}
.nav_link li:hover .mega_box {
	opacity: 1;
	visibility: visible;
	top: 4rem;
	transition: all 0.5s ease;
}
.drop_menu li a {
	display: block;
	width: 100%;
	padding: 0 0 0 15px;
	font-weight: 400;
	border-radius: 0px;
}
.mega_box {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
    top: 5.5rem;
	opacity: 0;
	visibility: hidden;
}
.mega_box_content {
	background-color: #242526;
	display: flex;
	padding: 2rem;
	width: 100%;
	justify-content: space-between;
}
.mega_box_row {
	width: calc(27% - 3rem);
	line-height: 4rem;
}
.mega_box_row img {
	height: 100%;
	width: 100%;
	object-fit: cover;
}
.mega_box_row header {
	color: #f2f2f2;
	font-size: 1.6rem;
	font-weight: 500;
}
.mega_box_link {
	margin-left: -3rem;
	border-right: 1px solid rgba(255, 255, 255, 0.1);
}
.mega_box_link li {
	padding: 0 2rem;
}
.mega_box_link li a {
	color: #d2d2d2;
	padding: 0 2rem;
	font-size: 1rem;
	display: block;
}
.nav_link .mobile_item {
	display: none;
}
#show_drop, #show_mega {
	display: none;
}
.btn {
	color: #f2f2f2;
	font-size: 2rem;
	cursor: pointer;
	display: none;
}
.cancel_btn {
	position: absolute;
	top: 1.5rem;
	right: 3rem;
}
#menu_btn, #cancel_btn {
	display: none;
}



@media screen and (max-width: 850px) {
	.btn {
		display: block;
	}
	.wraper .nav_link {
		position: fixed;
		height: 100vh;
		width: 100%;
		max-width: 30rem;
		background: #242526;
		display: block;
		top: 0;
		left: -35rem;
		overflow-y: auto;
		padding: 5rem 1rem;
		transition: all 0.5s;
		box-shadow: 0 1.5rem 1.5rem rgba(0, 0, 0, 0.25);
	}
  .nav_link::-webkit-scrollbar {
		width: 0;
	}
	#menu_btn:checked ~ .nav_link {
		left: 0;
	}
	.nav_link li {
		margin: 1.5rem 1rem;
	}
	.nav_link li a {
		padding: 0 2rem;
		display: block;
		font-size: 1.5rem;
	}
	.nav_link .drop_menu {
		position: static;
		opacity: 1;
		visibility: visible;
		width: 100%;
		top: 6.5rem;
		padding-left: 2rem;
		max-height: 0;
		overflow: hidden;
	}
	#show_drop:checked ~ .drop_menu,
	#show_mega:checked ~ .mega_box {
		max-height: 100%;
	}
	#menu_btn:checked ~ .menu_btn {
		display: none;
	}
	.nav_link .drop_menu li {
		margin: 0;
	}
	.nav_link .drop_menu li a {
		font-size: 1.3rem;
		border-radius: 2rem;
	}
	.nav_link .destop_item {
		display: none;
	}
	.nav_link .mobile_item {
		display: block;
		font-size: 1.5rem;
		font-weight: 500;
		color: #f2f2f2;
		padding-left: 2rem;
		cursor: pointer;
		border-radius: 0.5rem;
	}
	.nav_link .mobile_item:hover {
		background: #3A3B3C;
	}
	.mega_box {
		position: static;
		top: 6.5rem;
		opacity: 1;
		width: 100%;
		padding: 0 2rem;
		visibility: visible;
		transition: all 0.3s ease;
		max-height: 0;
		overflow: hidden;
	}
	.mega_box_content {
		background-color: #242526;
     	flex-direction: column;
		padding: 2rem 2rem 0 2rem;
 	}
	.mega_box_row {
		width: 100%;
		border-top: 1px solid rgba(255, 255, 255, 0.25);
	}
	.mega_box_link {
		border-right: 0;
	}
	.mega_box_link li {
		margin: 0;
	}
	.nav_link li a {
		padding: 0 2rem;
		display: block;
		font-size: 1.5rem;
	}
}

</style>
<body>
	<!-- get img from php -->
	<?php 
		include ('connect.php');

		$id = 2;
		$sql = "select * from image where id = '$id'";
		$sqlSelect = "select * from product";
		$result = mysqli_query($con, $sql);
		$r = mysqli_fetch_assoc($result);
		$runSql = mysqli_query($con, $sqlSelect);

		$linkImg = $r['img'];
		$row = mysqli_fetch_assoc($runSql);
			$product_ID    = $row['Product_ID'];
			$product_name  = $row['Product_Name'];
            $product_price = $row['Product_Price'];   
            $product_img   = $row['Product_Description'];   
            $categori_ID   = $row['Categori_ID'];
	 ?>
	 <!-- --------------------------------------------------------- -->
	
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
									<?php echo "<li><a href='#'>$product_name</a></li>" ?>
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
	</div>
</nav>
</body>
</html>