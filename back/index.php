<?php
    
	$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'login';
	
	require_once 'views/' . $pagina . '.php';	