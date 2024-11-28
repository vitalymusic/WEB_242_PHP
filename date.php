<?php 
    date_default_timezone_set("Europe/Riga");
    // print_r(getdate());
    $timestamp = time();
    $timestamp = date_create();
    
    $format = "w d F Y H:i:s";
 
    $timeText = date_format($timestamp,$format);

    echo $timeText;


?>