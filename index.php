<?php
    $title = "Hello from PHP";
    $js = "
        <script>
            alert(\"Hello from JS\")
        </script>
    ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $title; ?></p>

    <?php echo $js;?>
</body>
</html>