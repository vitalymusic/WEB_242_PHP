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

        $name = $link->real_escape_string($data["name"]);
        $surname = $link->real_escape_string($data["surname"]);
        $email = $link->real_escape_string($data["email"]);
        $username = $link->real_escape_string($data["username"]);
        $id = $link->real_escape_string($data["id"]);


        $sql = "UPDATE `Users` SET
         name = '{$name}', 
         surname = '{$surname}', 
         email = '{$email}', 
         username = '{$username}'
         WHERE `Users`.`id` = {$id};";
 
        $result = $link->query($sql);
        if(!$result){
            exit($link->error_get_last);
        }

        header('location: users.php');

        
    }

    function create_user($data){
        global $link;

        $name = $link->real_escape_string($data["name"]);
        $surname = $link->real_escape_string($data["surname"]);
        $email = $link->real_escape_string($data["email"]);
        $username = $link->real_escape_string($data["username"]);

        $sql = "INSERT INTO Users (name,surname,email,username) VALUES ('{$name}','{$surname}','{$email}','{$username}')";

        $result = $link->query($sql);
        if(!$result){
            exit($link->error);
        }

        header('location: users.php');

        
    }


    function delete_user($id){
        global $link;
        // exit("deleted");
        $sql = "DELETE FROM `Users` WHERE id={$id}";
        $result = $link->query($sql);
        if(!$result){
            exit($link->error);
        }

        // header('location: users.php');

    }






    if(
        isset($_POST) 
        && isset($_GET["update"]) 
        && $_GET["update"]==true){  
        update_user($_POST);    
    
    }

    if(
        isset($_POST) 
        && isset($_GET["create"]) 
        && $_GET["create"]==true){  
        create_user($_POST);    
    
    }

    if(isset($_GET["id"]) 
    && isset($_GET["delete"]) 
    && $_GET["delete"]==true){
        delete_user($_GET["id"]);
    }

?>
<!-- CRUD - application in PHP;
create - Read-Update-Delete; -->