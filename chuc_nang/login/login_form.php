<?php 
<<<<<<< HEAD
  $conn =pg_connect("host=localhost dbname=db_banhang user=postgres password=nguyenducanh");
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['user_name'];
    $mypassword = $_POST['pass_word'];

=======
  include("ket_noi.php"); 
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['user_name'];
    $mypassword = $_POST['pass_word'];
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
    $mypassword=md5($mypassword);
    $tv = "SELECT ten_khach_hang,mat_khau FROM khach_hang WHERE ten_khach_hang='$myusername' and mat_khau='$mypassword'";
    $tv_1 = pg_query($conn ,$tv);
    $count = pg_num_rows($tv_1);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
      $_SESSION['login_user'] = $myusername;
<<<<<<< HEAD
          echo "Xin chào " . $myusername . ". Bạn đã đăng nhập thành công. <a href='./index.php'>Về trang chủ</a>";
          die();
=======
          header("location: index.php");
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
      } else {
          echo "<p class='fail_noti'>Your Username or Password is invalid</p>";
      }
  }
?>  

<head>
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <style type="text/css">
    @import "bourbon";
<<<<<<< HEAD

body {
  /*background: #eee !important*/;  
}
h2 {
    /*color: black !important;*/
}
=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}
<<<<<<< HEAD

=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  /*background-color: #fff;*/
  border: 1px solid rgba(0,0,0,0.1);  
<<<<<<< HEAD

=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }
<<<<<<< HEAD

  .checkbox {
    font-weight: normal;
  }

=======
  .checkbox {
    font-weight: normal;
  }
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);
<<<<<<< HEAD

=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
    &:focus {
      z-index: 2;
    }
  }
<<<<<<< HEAD

=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
<<<<<<< HEAD

=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
<<<<<<< HEAD

=======
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
  </style>
</head>
<body>
  <div class="wrapper">
    <form class="form-signin" method="POST" action="">       
<<<<<<< HEAD
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="user_name" placeholder="User name" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="pass_word" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
</body>
<!-- html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login_style.css">
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>The food lover</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="POST" action="login_form.php" class="form-group">

      


            <input type="text" class="form-control" id="inputEmail" placeholder="User name" name="user_name" >

        
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass_word" >

               <div class="forgot">
        <a href="reset.html">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>

    </form>
    </div>
<p class="botto-text"> Designed by Duc Anh</p>
</div></div></div>


</body>
</html> -->
=======
      <h2 class="form-signin-heading" style="text-align:center; padding: 15px;">Please login</h2>
      <input type="text" class="form-control" name="user_name" placeholder="User name" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="pass_word" placeholder="Password" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 30px;">Login</button>   
    </form>
  </div>
</body>
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
