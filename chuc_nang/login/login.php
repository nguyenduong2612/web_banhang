<?php 
	include("ket_noi.php");	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myusername = $_POST['username'];
		$mypassword = $_POST['password'];

		$tv = "select * from khach_hang where username = '$myusername' and pass = '$mypassword'";
		$tv_1 = pg_query($conn ,$tv);

		$count = pg_num_rows($tv_1);

		// If result matched $myusername and $mypassword, table row must be 1 row

		if($count == 1) {
			$_SESSION['login_user'] = $myusername;
	        header("location: index.php");
	   	} else {
	        echo "<p class='fail_noti'>Your Username or Password is invalid</p>";
	    }
	}
?>	


<div style="width: 40%; margin: auto; padding-top: 50px; font-size: 24px;">
	<form action="" method = "post">
		<div class="form-group">
	    	<label>Tài khoản</label>
	    	<input type="text" class="form-control" name="username">
	  	</div>
	  	<div class="form-group">
	   		<label>Mật khẩu</label>
	    	<input type="password" class="form-control" name="password">
	  	</div>
	  	<input type="submit" class="btn btn-primary" value="Đăng nhập">
	  	<button type="button" class="btn btn-primary" onclick="window.location.href='?thamso=register'">Đăng ký</button>
	</form>
</div>