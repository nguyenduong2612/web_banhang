<?php 
if (!isset($_POST['name'])) {
	# code...
	die('');}	
	include('../../ket_noi.php');
	header('Content-Type: text/html; charset=UTF-8');



	$username   = addslashes($_POST['name']);
    $password   = addslashes($_POST['password']);
    $email      = addslashes($_POST['email']);
    $address   = addslashes($_POST['address']);
    $telephone   = addslashes($_POST['telephone']);

    //ma hóa mật khẩu
    $password = md5($password);
    //kiểm tra tên có trong database

    if (pg_affected_rows(pg_query($conn,"SELECT ten_khach_hang FROM khach_hang WHERE ten_khach_hang='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     //Kiểm tra email đã có người dùng chưa
    if (pg_affected_rows(pg_query($conn,"SELECT email FROM khach_hang WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     $addmember = pg_query($conn,"
        INSERT INTO khach_hang(
            ten_khach_hang,
            mat_khau,
            email,
            dia_chi,
            dien_thoai
        )
        VALUES(
            '{$username}',
            '{$password}',
            '{$email}',
            '{$address}',
            '{$telephone}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>Aww yeah, you successfully read this importaalert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class='mb-0'>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='../../index.php'>Thử lại</a>"

 ?>