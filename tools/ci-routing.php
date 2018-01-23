<?php
$BASE_DIR = __DIR__ . '/../web' ;
if (file_exists($BASE_DIR . $_SERVER['REQUEST_URI'])) 
	return false; 
$_SERVER['SCRIPT_NAME'] = '/index.php'; 
include_once ($BASE_DIR . '/index.php');
