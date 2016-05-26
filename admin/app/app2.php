<?php 
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseurl = "http://" . $host."/web/admin/";

if (isset($_SESSION["access"])) {
	if ($_SESSION["access"] != true) {
		header('Location: inicio');
	}
} else {
	header('Location: ../admin');
}
?>