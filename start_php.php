<?php

    $images = false;
    define("TITLE","Hello from PHP");
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
    $num1 = 123;
    $num2 = 456;

    echo "<br>" . $num1+$num2;
    echo "<br>" . $num1-$num2;
    echo "<br>" . $num1*$num2;
    echo "<br>" . $num1/$num2;
    // echo "<br>" . ($num1**$num2);
    // var_dump($num1*10000);
    echo "<br>" . $num1+=25;


    // Строки
    $title = "text";

    $text = "
        <h1>{$title}</h1>
    ";
    $text2 = '';

    $text .= "<p>".TITLE."</p>";

    echo $text;

    $password = md5("Qwerty!12345");
    $password2 = md5("Qwerty!12345");
    // explode,trim,

    echo substr(TITLE,0,5);

    $html = "<script>alert(\"hacked!!!\")</script>";

    echo html_entity_decode($html); 
    echo htmlentities($html); 
    
    ?>
    <?php //echo $password?>
    <?php //echo $password2?>
</body>
</html>