<?php
	$mysqlsunucu = "localhost";
	$mysqlkullanici = "root";
	$mysqlsifre = "123456";
	$dbname="blogg";

	try{
	    $db = new PDO("mysql:host=$mysqlsunucu;dbname=$dbname;charset=utf8", $mysqlkullanici, $mysqlsifre);
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Bağlantı başarılı"; 
	}catch(PDOException $e){
	    echo "Bağlantı hatası: " . $e->getMessage();
	}
?>