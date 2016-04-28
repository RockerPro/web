<?php 
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseurl = "http://" . $host.$uri."/";
 ?>