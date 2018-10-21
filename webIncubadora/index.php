<?php
    
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

    	require_once 'views/' . $pagina . '.php';