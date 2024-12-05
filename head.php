<?php include "settings.php" ?>
<?php include "functions.php" ?>


<?php 
session_start();
var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "bootstrap.php" ?>

    <style>



    </style>
    <title><?php echo $title;?></title>


</head>
<body>