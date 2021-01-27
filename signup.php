<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
body {
  padding: 0;
  margin: 0;
  background-color: #ccc;
  background-size: cover;
}
.wrapper {
  width: 480px;
  height: 520px;
  color: #020202;
  top: 50%;
  left: 50%;
  padding: 60px 30px;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  box-shadow: 8px 8px 50px white;
}
h1 {
  padding: 0;
  margin: 0;
  font-weight: bold;
  font-size: 35px;
  color: #3B3C3D;
  text-align: center;
  margin-bottom: 8%;
}
.wrapper input {
  width: 100%;
  margin-bottom: 6%;
}
.wrapper input[type=text], input[type=password] {
  border: none;
  border-bottom: 1px solid #ddd;
  background: transparent;
  outline: none;
  color: black;
  height: 2rem;
  font-size: 1rem;
  opacity: 1;
}
.wrapper input[type=submit] {
  border: 1px solid #ddd;
  outline: none;
  height: 3rem;
  font-size: 1.5rem;
  background: transparent;
  color: white;
  font-weight: bold;
  cursor: pointer;
  opacity: 0.6;
  background-image: linear-gradient(45deg, red, blue);
  transition: all 0.5s ease;
}
.wrapper input[type=submit]:hover {
  opacity: 1;
  background-image: linear-gradient(45deg, blue, red);
}
</style>
<body>
	<div class="wrapper">
		<div class="div_login">
			<h1>Sign up</h1>
			<form action="xulysignup.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="uname" placeholder="User">
				<input type="password" name="pass" placeholder="Password">
				<input type="text" name="name" placeholder="Name">
				Vui lòng thêm ảnh
				<input type="file" name="image">
				<?php if (isset($_GET['error'])) { ?>
			        <p><?php echo $_GET['error']; ?></p>
			    <?php } ?>
				<input type="submit" value="Sign Up" name="signup">
			</form>
		</div>
	</div>
</body>
</html>