<?php 

ob_start();
session_start();

try {
	$db = new PDO("mysql:host=localhost; dbname=rablogin; charset=utf8;","root","19331944");
} catch (PDOException $error) {
	echo "<center><b>Veritabanına bağlantı yapılamadı</b></center>"; $error->getMessage();
}

?>