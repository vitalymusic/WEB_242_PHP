<?php 
        print_r($_FILES["file_upload"]);

        $uploadDir = "uploads/"; 
           //    multiple files upload
            foreach($_FILES["file_upload"]["name"] as $key => $name){

                if(
                    move_uploaded_file($_FILES["file_upload"]["tmp_name"][$key], $uploadDir . $_FILES["file_upload"]["name"][$key])){
                       
                }
            }


            header("location: file_form.php");



            // $fileName = $_FILES["file_upload"]["name"];
          
        
        
?>