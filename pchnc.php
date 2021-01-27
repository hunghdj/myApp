<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
	height: 70px;
	line-height: 65px;
}
nav p {
	position: absolute;
	top: -1.5rem;
	right: -125px;
	color: white;
	opacity: 0.5;
	padding-top: 1.6rem;
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
.right {
	width: 1180px;
	height: 66rem;
	background-color: #white;
	margin: 0 auto;
	box-sizing: border-box;
	border-left: 5px solid black;
	border-right: 5px solid black;
}
.left {
	width: 29%;
	height: 66rem;
	background-color: red;
	float: left;
	margin-top: 2rem;
}
.abc_div {
	height: 70px;
	width: 100%;
}
.div_right h3 {
	font-family: sans-serif;
	color: grey;
}
.div_right a:hover {
	font-size: 5rem;
	transition: all .5s ease;
}
.btn_buy {
	margin-left: 2.5rem; 
	padding: 2px 9px;
	border: none;
	background-color: #f2f2f2;
	cursor: pointer;
	border-radius: 5px;
}
.footer {
	width: 100%;
	height: 100px;
}
.footer_top {
	display: flex;
	width: 1200px;
	height: 99px;
	margin: 0 auto;
	align-items: center;
	border-top: 1px solid rgba(255, 0, 0, 0.5);
}
.footer_top_content {
	display: flex;
	width: 295px;
	height: 43px;
	margin-left: 35px;
}
.footer_top_content p {
	font-size: 12px;
}
.footer_top_icon{
	font-size: 35px;
	color: #3A3B3C;
	margin-right: 15px;
}
.footer_bottom {
	width: 100%;
	height: 148px;
	background-color: #222222;
}
.footer_bottom_content {
	width: 1180px;
	height: 148px;
	margin: 0 auto;
	padding: 20px 0;
}
.footer_bottom_content p {
	color: white;
	font-size: 12px;
	padding: 5px 0;	
}
</style>
</head>
<body>
	<!-- get img from php -->
	<?php 
		include ('connect.php');

		$id = 1;
		$sql = "select * from image where id = '$id'";
		$result = mysqli_query($con, $sql);
		$r = mysqli_fetch_assoc($result);
		$linkImg = $r['img'];
			
	 ?>
	 <!-- --------------------------------------------------------- -->
	<div>
		<div>
		<nav>
	    <div class="wraper">
		<div class="logo">
			<?php if (isset($_GET['error'])) { ?>
            	<p>Hello<?php echo $_GET['error']; ?> !</p>
            <?php } ?>
			<a href="#">PC HNC</a>
		</div>
		<!-- <input type="radio" name="slide" id="menu_btn">
		<input type="radio" name="slide" id="cancel_btn"> -->
		<ul class="nav_link">
			<li><a href="testasm.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#" class="destop_item">Buy</a></li>
				<!-- <input type="checkbox" id="show_drop">
				<label for="show_drop" class="mobile_item">All Product</label> -->
			<!-- 	<ul class="drop_menu">
					<li><a href="#">Computers</a></li>
					<li><a href="#">Watch</a></li>
					<li><a href="#">Điện thoại</a></li>
					<li><a href="#">Macbook</a></li>
				</ul> -->
			</li>
			<li><a href="#" class="destop_item">All Product</a>
				<!-- <input type="checkbox" id="show_mega">
				<label for="show_mega" class="mobile_item">Product</label> -->
				<div class="mega_box">
					<div class="mega_box_content">
						<div class="mega_box_row">
							<?php echo "<img src='$linkImg'>" ?>
						</div>
						<div class="mega_box_row">
							<header>Laptop</header>
								<ul class="mega_box_link">
									<li><a href="macbook.php">Macbook</a></li>
									<li><a href="#">Laptop Acer</a></li>
									<li><a href="#">Laptop MSI</a></li>
									<li><a href="#">Laptop LG</a></li>
								</ul>
						</div>
						<div class="mega_box_row">
							<header>PC Gamming</header>
								<ul class="mega_box_link">
									<li><a href="dell.php">PC Dell</a></li>
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
			<li><a href="#">Account</a></li>
		</ul>
	</div>
    </nav>
		</div>
		<div class="right">
			<div class="abc_div"></div>
			<?php 
			include ('connect.php');

			$sqlSelect = "select * from product where Categori_ID='1'";

		    $runSql = mysqli_query($con, $sqlSelect);
			$runSql = mysqli_query($con, $sqlSelect);
		    while ($row = mysqli_fetch_array($runSql)) {
			$product_ID    = $row['Product_ID'];
			$product_name  = $row['Product_Name'];
            $product_price = $row['Product_Price'];   
            $product_img   = $row['Product_Description'];   
            $categori_ID   = $row['Categori_ID'];          
              
            echo "
            <div style='width: 350px; height: 250px; float: left; background-color: #ccc; text-align: center; margin: 1rem; border-radius: 1.5rem;' class='div_right'>
            <h3>$product_name</h3>
			<a href='infohnc.php?id=$product_ID'><img src='$product_img' width='200px' height='180px'></a>
			<p>
			Price: $product_price 
			<button type='btton' class='btn_buy'>Buy</button>
			</p>
			</div>
		    " 
		     ;     
		    }	 
		?>
		</div>
		<div class="footer">
			g
		</div>
	</div>
	<div class="footer">
			<div class="footer_top">
				<div class="footer_top_content">
					<div class="footer_top_icon"><i class="fas fa-shipping-fast"></i></div>
						<div>
							<h4>CHÍNH SÁCH GIAO HÀNG</h4>
							<p>Nhận hàng và thanh toán tại nhà</p>
						</div>
					</div>
					<div class="footer_top_content">
						<div class="footer_top_icon"><i class="fas fa-sync"></i></div>			      
			       		<div>
			       			<h4>ĐỔI TRẢ DỄ DÀNG</h4>
			       			<p>Dùng thử trong vòng 3 day</p>
			       		</div>
					</div>
					<div class="footer_top_content">
						<div class="footer_top_icon"><i class="fab fa-cc-apple-pay"></i></div>
						<div>
							<h4>THANH TOÁN TIỆN LỢI</h4>
							<p>Trả tiền mặt, CK, trả góp 0%</p>
						</div>	
					</div>
			       	<div class="footer_top_content">
			       		<div class="footer_top_icon"><i class="far fa-comments"></i></div>
			       		<div>
			       			<h4>HỖ TRỢ NHIỆT TÌNH</h4>
			       			<p>Tư vấn giải đáp mọi thắc mắc</p>
			       		</div>
			       	</div>	
				</div>
		    </div>
		    <div class="footer_bottom">
		    	<div class="footer_bottom_content">
		    		<p>© 2020 Công Ty Cổ Phần Máy Tính Hải Dương</p>
		    		<p>Địa chỉ: 107 Nguyễn Phong Sắc, Cầu Giấy Hà Nội</p>
		    		<p>GPĐKKD: số 000000001 do Sở KHĐT Tp.Hà Nội cấp ngày 4-9-2001</p>
		    		<p>Email: hungpvbhaf190090@fpt.edu.vn. Điện thoại: 0799212901</p>
		    	</div>
		    </div>
	    </div>
</body>
</html>
</body>
</html>