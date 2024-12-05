<?php   include "db.php";



function get_posts(){

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

}

    function del_post($id){
        global $link;

        $sql = "DELETE FROM `posts` WHERE id={$id}";
        $result = $link->query($sql);
        if($result){
            echo "Post deleted";
        }else{
            echo $result->error;
        }

    }

    function get_users(){
        $data = [];
        global $link;    
        $sql = "SELECT * from Users;";
        $result = $link->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }


    function get_user(int $id){
        $data = [];
        global $link;  
        $sql = "SELECT * FROM `Users` WHERE users.id = {$id};";
        $result = $link->query($sql);
        $data[] = $result->fetch_assoc();
        return $data;

    }


    function update_user($data){
        global $link;
        $sql = "UPDATE `Users` SET
         name = '{$data["name"]}', 
         surname = '{$data["surname"]}', 
         email = '{$data["email"]}', 
         username = '{$data["username"]}'
         WHERE `Users`.`id` = {$data["id"]};";
 
        $result = $link->query($sql);

        if(!$result){
            exit($link->error_get_last);
        }



    }





    if(
        isset($_POST) 
        && isset($_GET["update"]) 
        && $_GET["update"]==true){  
        update_user($_POST);    
    
    }

?>
<!-- CRUD - application in PHP;
create - Read-Update-Delete; -->