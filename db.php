<?php
 $link = new mysqli("localhost","root","root","web242php");


 if($link->connect_error){
    exit($link->connect_error);
 }

    echo "Connected";

    ?>

