<?php 
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseurl = "http://" . $host."/web/";

$ruta = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>