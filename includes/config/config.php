<?php 

define('INCPATH', '/Users/chapin/Documents/edu/BU/CS665/FinalProject/Appstravaganza/includes/');
define('CLASSPATH', INCPATH . 'classes/Store/');

/*
spl_autoload_register(function($class) {
//	exit(CLASSPATH . $class . '.php');
	include CLASSPATH . $class . '.php';
});
*/

$connection = array(
	'host' => '192.168.1.10',
	'username' => 'jason',
	'passwd'   => '8charmax',
	'database' => 'appdb',
);
	
?>
