<?php
	ob_start();
	session_start();
	
	try{
		$con = new PDO("mysql:dbname=bd_user;host=localhost", "root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}
	catch(PDOException $e){
		exit("Подключене не удалось " . $e->getMessage());
	}

?>