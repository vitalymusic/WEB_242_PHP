<?php 
        print_r($_FILES);

        $fileName = $_FILES["file_upload"]["name"];

        if(
            move_uploaded_file($_FILES["file_upload"]["tmp_name"],"uploads/". $fileName)){
            echo "File uploaded";
        }
        
?>