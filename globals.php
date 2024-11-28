<!-- $GLOBALS - 
$_SERVER - Server information
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION -->

<?php 
    session_start();
    // print_r($_SERVER);
    // print_r($_REQUEST);
    // print_r($_POST);
    // print_r($_GET);
    // print_r($_FILES);
    // print_r($_ENV);
   

    setcookie("background","");
    setcookie("color","white");
    setcookie("username","Andrew");


    // print_r($_COOKIE);
    // print_r($_SESSION);
    
?>
