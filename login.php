<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  color: white;
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
.wrapper_bottom a {
  text-decoration: none;
  color: #3B3C3D;
  opacity: 0.6;
  float: right;
  font-size: 1.3rem;
}
.wrapper_bottom a:hover {
  opacity: 1;
}
.wrapper_bottom input {
  width: 5%;
}
.wrapper_icon {
  font-size: 1.5rem;
  margin-top: 8%;
  text-align: center;
}
.wrapper_icon a {
  display: inline-block;
  width: 3rem;
  height: 3rem;
  border: 1px solid #fff;
  border-radius: 50%;
  color: #fff;
  margin-left: 2rem;
}
.wrapper_icon a:nth-child(1) {
  background: #301be0;
}
.wrapper_icon a:nth-child(2) {
  background: #55abf5
}
.wrapper_icon a:nth-child(3) {
  background: #f91212;
}
.wrapper_icon a:nth-child(4) {
  background: #2885b1;
}
.wrapper_icon a i {
  padding: 12px;
  padding-left: 13px;
}

</style>
<body>
	<div class="wrapper">
    <form method="POST" action="login5.php">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" name="uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" name="pass" placeholder="Password"/>
            </div>
            <?php if (isset($_GET['error'])) { ?>
                <p><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div>
                <input type="submit" value="Log in" name="submit" />
            </div>
        </div>
    </form>
       <div class="wrapper_bottom">
        <input type="checkbox" name="" checked="checked">Remember
        <a href="#" class="wrapper_bottom_forget">Quên mật khẩu ?</a>
      </div>
       <div class="wrapper_icon">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
      </div>
    </div>
</body>
</html>