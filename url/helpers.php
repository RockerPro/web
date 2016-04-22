<?php

function view($template, $vars = array())
{
  extract($vars);

  require "views/$template.tpl.php";
}

function controller($name)
{
	if (empty($name))
	$file = "controllers/$name.php";

	if (file_exists($file)){
   	require $file;
	}
	else{
	  header('HTTP/1.0 404 Not Found');
	  require "controllers/404.php";
	}
}