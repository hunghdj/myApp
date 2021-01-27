<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="login.css">
    <title>login</title>
  </head>
  <body>
  
    <div class="wrapper">
      <h1>Log In</h1>
      <form class="wrapper_login" action="php.php" class="login" method="POST">
        <input type="text" name='username' placeholder="Username">
        <input type="password" name='password' placeholder="Password">
        <input type="submit" value="Login">
      </form>
      <div class="wrapper_bottom">
        <input type="checkbox" name="" checked="checked">
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
