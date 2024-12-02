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
            $data[] = $row; //Для вывода данных в JSON

            echo "<h1>{$row["post_name"]}</h1>";
            echo "<p>{$row["content"]}</p>";
            echo "<input type='text' value='{$row["date"]}'>";
        }

        // echo json_encode($data);
        // print_r($data);

    }


    function delPost($id){
        global $link;

        $sql = "DELETE FROM `posts` WHERE id={$id}";
        $result = $link->query($sql);
        if($result){
            echo "Post deleted";
        }else{
            echo $result->error;
        }

    }

    delPost(4);


?>
CRUD - application;