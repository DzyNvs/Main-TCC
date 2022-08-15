<?php
	$servidor="localhost";
	$banco="spsubmerso";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
	
	
?>