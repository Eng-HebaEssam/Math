<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    include 'admin/connect.php';
    $sessionUser = '';
    if (isset($_SESSION['user'])) {
        $sessionUser = $_SESSION['user'];
    }
    //routes
    $tpl='includes/templates/'; 
    $func= 'includes/functions/'; 
    $css='layouts/css/';
    $night="layouts/css/nigh-theme.css";
    $sun="layouts/css/mai-theme.css"; 
    $js='layouts/js/'; 
    include $func . 'function.php';
    include $tpl .'header.php';
