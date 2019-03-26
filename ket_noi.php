
<?php
	$host = "ec2-50-17-227-28.compute-1.amazonaws.com";
	$user = "sncorvhbjcylzi";
	$password = "82cb74dc7ad600a9dc9e2e7ba2eda75aa7f20a2a24300af123cb51c91f425b26";
	$dbname = "d9muvonefgn9rk";
	$port = "5432";
	try{
	  //Set DSN data source name
	    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
	  //create a pdo instance
	  $conn = new PDO($dsn, $user, $password);
	  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
	}
 ?>