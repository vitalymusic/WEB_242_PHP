<?php
 $link = new mysqli("localhost","root","root","web242php");


 if($link->connect_error){
    exit($link->connect_error);
 }

    echo "Connected";


    $sql = "SELECT * from posts";

    $result = $link->query($sql);

    $data = [];

    if($result->num_rows>0){
        
        while($row = $result->fetch_assoc()){
            echo "<h1>{$row["post_name"]}</h1>";
            echo "<p>{$row["content"]}</p>";
            echo "<input type='text' value='{$row["date"]}'>";
        }

        // echo json_encode($data);


        // print_r($data);

    }

    



?>