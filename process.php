<?php
    session_start();


    $login = "vitaly.music@inbox.lv";
    $password = "TestPassword123";


    if($_POST["login"] == $login && $_POST["password"] === $password){
        $_SESSION["loggedin"]=true;
        header('Location: index.php');
    }else{
        header('Location: login.php');
        $_SESSION["loggedin"]=false;
    }

?>