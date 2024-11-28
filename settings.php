<?php
    $title = "My first web page using PHP";
    
    

    $data = [];


    $data["features"] = [
        [
            "name"=>"WEB Sites",
            "text"=>"We are specialists of creating web",
            "img"=>"",
            "href"=>"./feature1.php"
        ],
        [
            "name"=>"Computer repair",
            "text"=>"We are ready to repair your PC",
            "img"=>"",
            "href"=>"./feature2.php"
        ],
        [
            "name"=>"CMS integration",
            "text"=>"We can integrate CMS in Your site",
            "img"=>"",
            "href"=>"./feature3.php"
        ],
    ];


    $data["users"] = [
        [
            "userid"=>1,
            "email"=>"admin@website.com",
            "name"=>"Alex"

        ],
        [
            "userid"=>2,
            "email"=>"user@website.com",
            "name"=>"Andrey"

        ],
    ];

        // var_dump($data);
?>