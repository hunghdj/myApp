<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
	z-index: 999;
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
.nav_link li:hover .register_login {
	opacity: 1;
	visibility: visible;
	top: 4rem;
	transition: all 0.5s ease;
}
.nav_link li:hover .mega_box {
	opacity: 1;
	visibility: visible;
	top: 4rem;
	transition: all 0.5s ease;
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
.container {
	width: 1000px;
	height: 45rem;
 	margin: 0 auto;
	overflow: hidden;
}
.abc_div {
	height: 70px;
	width: 100%;
}
.register_login {
	background-color: #242526;
	width: 150px;
	opacity: 1;
	position: absolute;
	opacity: 0;
	visibility: hidden;
	top: 5.5rem;
}
.login a,
.register a {
	width: 80%;
	display: block;
	line-height: 35px;
}
div#slider {
  overflow: hidden;
  margin: auto;
  width: 100%;
  max-width: 1000px;
  max-height: 700px;
}
div#slider div {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  font-size: 0;
  animation: 10s slider infinite;
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
	 <?php 
		include ('connect.php');

		$id = 2;
		$sql = "select * from image where id = '$id'";
		$result = mysqli_query($con, $sql);
		$r = mysqli_fetch_assoc($result);
		$linkImg1 = $r['img'];
			
	 ?>
	 <?php 
		include ('connect.php');

		$id = 3;
		$sql = "select * from image where id = '$id'";
		$result = mysqli_query($con, $sql);
		$r = mysqli_fetch_assoc($result);
		$linkImg2 = $r['img'];
			
	 ?>
	 <!-- --------------------------------------------------------- -->
	<div>
		<div>
		<nav>
	    <div class="wraper">
		<div class="logo">
			<a href="#">AppStore</a>
		</div>

						</div>
					</div>
				</div>
			</li>
			<li><a href="#">Account</a>
				<?php if(!isset($_SESSION['id'])){ ?>
			  <div class="register_login">
			  <div class="login"><a href="login.php?action=login">Login</a></div>
			  <div class="register"><a href="signup.php">Register</a></div>
			  </div><!-- /.register_login --> 
			  
			  <?php }else{ ?>
			  
			  <?php 
			  $select_user = mysqli_query($con,"select * from user where id='$_SESSION[id] '");
			  $data_user = mysqli_fetch_array($select_user);
			  ?>
			  <div id="profile">
			    
				<ul>
				  <li class="dropdown_header">
				   <ul class="dropdown_menu_header">
				     <li><a href="my_account.php?action=edit_account">Account Setting</a></li>
					 <li><a href="logout.php">Logout</a></li>
				   </ul>
				   
				  </li>
				</ul>
			  </div>
			  
			  <?php } ?>
			</li>
		</ul>
	</div>
    </nav>
<?php 
	include ('connect.php');
	$sql = "select*from product inner join categori on product.Categori_ID = categori.Categori_ID";
	$result = mysqli_query($con, $sql);
 ?>

<div>
	<h1>DANH SÁCH SẢN PHẨM</h1>

	<div>
		<table>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Ảnh sản phẩm</th>
				<th>Giá sản phẩm</th>
				<th>Số lượng</th>
				<th>Danh mục</th>
				<th>Sửa</th>
				<th>Xoá</th>
			</tr>
			<?php 
				$index=1;
				while ($row = mysqli_fetch_assoc($result)) {?>
					<tr>
				       <td><?= $index++ ?></th>
				       <td><?=$row['Product_Name']?></th>
				       <td><img src='<?= $row['Product_Description']?>' width='200px' height='180px'></th>
				       <td><?= $row['Product_Price']?></th>
				       <td><?= $row['quantity']?></th>
				       	<td><?=$row['Categori_Name']?></td>
				       <td><a href="index.php?page_layout=sua&id=<?php echo $row['Product_ID'];?>">Sửa</a></th>
				       <td><a onclick="return del('<?php echo $row['Product_Name']; ?>')"
				       href="index.php?page_layout=xoa&id=<?php echo $row['Product_ID'];?>">Xoá</a></th>
			        </tr>
			<?php	}?>
		</table>
		<a href="index.php?page_layout=them">Thêm mới</a>
	</div>
</div>
<script>
	function del (a) {
		return confirm('Bạn có chắc chắn muốn xoá:' +a+ ' ?');
	}
</script>
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
