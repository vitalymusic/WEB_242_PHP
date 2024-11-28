<?php 
    $timestamp = date_create();

    date_default_timezone_set("Europe/Riga");
    // print_r(getdate());
    
    function showDate($time){
        global $timestamp;
        $format = "l d F Y H:i:s";
     
        $timeText = date_format($timestamp,$format);
        return $timeText;
    }


    echo "<h1>" . showDate(time()) ."</h1>";

    // echo $timestamp;
?>