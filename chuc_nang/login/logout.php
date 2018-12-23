<?php 
	include("ket_noi.php");	
	if(session_destroy()) {
	    header("location: index.php");
	}
?>