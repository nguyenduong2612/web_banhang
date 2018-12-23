<?php 
	include("ket_noi.php");	
	if(session_destroy()) {
<<<<<<< HEAD
	    echo "<a href='./index.php'>Về trang chủ</a>";
=======
	    header("location: index.php");
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
	}
?>