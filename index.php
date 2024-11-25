<?php

    $images = false;
    $title = "Hello from PHP";
    $js = "
        <script>
            alert(\"Hello from JS\")
        </script>
    ";

    // комментарии

    $int1 = 123;
    $float = 123.45;
    $string = "Text";
    $bool = true;

    $arr = [$int1,$float,$string,$bool];

// асоциированный массив
    $users = [
        "user1"=>[
            "username"=>"Janis",
            "email"=>"janis@inbox.lv",
            "role"=>"admin"
        ]
    ];

    echo $int1;

    var_dump($users);

    // print_r($arr);




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

    <?php 

    if($images){    
        echo "<img src=\"https://www.ambionics.io/images/iconv-cve-2024-2961-p1/iconv-cve-2024-2961-p1.png\" alt=\"\">";
    }
    
    ?>
    <?php echo $js;?>
</body>
</html>