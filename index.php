<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body style="font-family: 'Quicksand', sans-serif; width: auto; position: relative;">
		<div class="main" style="width: 100%;">

			<div class="header">
				
			</div>

			<div class="nav-bar">
				<img src="hinh_anh/icon.png" height="50" style="position: absolute; top: 3px; left: 96px;">
			    <a href="index.php">Trang chủ</a>
			    <a href="?thamso=about">Giới thiệu</a>
			    <a href="?thamso=all_product">Món ăn</a>
			    <a href="?thamso=guide">Hướng dẫn mua hàng</a>
			    <a href="?thamso=contact">Liên hệ</a>
			</div>

			<div class="content">
				<div class="left-container">
					<?php 
						include("chuc_nang/menu_doc/menu_doc.php");
						include("chuc_nang/san_pham/new_product.php"); 
						include("chuc_nang/quang_cao/left_ads.php"); 
					?>					
				</div>
				<div class="main-container">
					<?php 
						include("chuc_nang/navigation.php");
					?>
				</div>
				<div class="right-container">
					<?php 
						include("chuc_nang/tim_kiem/vung_tim_kiem.php");
						include("chuc_nang/gio_hang/vung_gio_hang.php"); 
						include("chuc_nang/san_pham/hot_product.php"); 
						include("chuc_nang/quang_cao/right_ads.php"); 
					?>					
				</div>
			</div>

			<div class="footer">
				<?php include("chuc_nang/footer/footer.php"); ?>
			</div>

		</div>
		
	</body>
</html>