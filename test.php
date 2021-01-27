<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		.wrapper{
			width: 1000px;
			height: auto;
		}
		.header{
			height: 55px;
			margin: auto;
			border: 1px solid black;
		}
		.logo {
			float:left;
			width: 150px;
			padding: 10px

		}
		.form_search{
			margin-top:10px;

		}
		.form_search input[type=text]{width: 250px; height: 30px}
		.form_search input[type=submit]{height: 30px}
		.login{
			float: right;
			right:30px;
			height:35px;
			line-height:35px;
			color:gray;
			cursor:pointer;
			position:relative;
			display:inline;
			
		}
		.login a{
			text-decoration: none;	

		}

.register{
	float: right;
			margin-right: 50px;
			height:35px;
			line-height:35px;
			color:gray;
			cursor:pointer;
			position:relative;
			display:inline;
			
		}
	
		.register a{
			text-decoration: none;	

		}
		.menu{	
			width: 100%		
			height: 30px;
			background: pink;
			border: 1px solid black
		}
		.menu ul li{
			list-style: none;
			text-align: center;
			display: inline-table;
		}
		.menu ul li a{
			text-decoration: none;
			font-size: 16px;
			margin: 30px;
			padding: 5px;
			text-transform: uppercase;
		}
		.content{
			width: 100%;
			height: 300px;
			border: 1px solid black
		}
		.left{
			width: 20%;
			background: gray;
			height: 300px;
			float: left;
		}
		.right{
			width: 80%;
			background:yellow;
			height: 300px;
			float:right;
		}
		.footer{
			width: 100%;
			height: 100px;
			background: red;
			border: 1px solid black
		}
	</style>
</head>
<body>
	
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<img src="Images/btec.jpg" >
			</div>
			<div class="form_search">
				<form>
					<input type="text" placeholder="Search a Product" />
					<input type="submit" value="Search" />
					<button class="login"> <a href="">login </a></button>
			
			<button class="register"> <a href="">register </a></button>
				</form>
			</div>
			<div class="register_login">
			
		</div>

		</div>
		<div class="menu">
			<ul>
				<li> <a href="index.html"> Trang chủ </a> </li>
				<li> <a href="Admin/view_product.html">Quản lý sản phẩm </a></li>
				<li><a href="Admin/add_product.html"> Thêm sản phẩm </a> </li>
				<li><a href="about.html"> Giới thiệu </a></li>
			</ul>
		</div>
		<div class ="content">
			<div class ="left">
				<p> Đây là phần bên trái</p>
			</div>
			<div class="right" style="display: flex;">

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
				<p> Đây là nội dung chính </p>
			</div>
		</div>
		<div class="footer">
			<p> Đây là footer </p>
		</div>
	</div>
</body>
</html>