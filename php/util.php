<?php
class DB_PHP
{
	public function getConexion(){
		$pdo = new PDO("mysql:host=localhost;dbname=blog","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES  \"UTF8\""));
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}
// class DB_PHP
// {
// 	public function getConexion(){
// 		$pdo = new PDO("mysql:host=localhost;dbname=sgtel_blog","sgtel_blog","exito2016",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES  \"UTF8\""));
// 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 		return $pdo;
// 	}
// }
