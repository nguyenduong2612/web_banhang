<?php 
	include("ket_noi.php");	
	if(session_destroy()) {
	    echo "<a href='./index.php'>Về trang chủ</a>";
	}
?>