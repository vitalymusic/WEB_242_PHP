<?php 

var_dump($data);


$data["features"];
$out = "";


for($i = 0;$i<sizeof($data["features"]);$i++){

$out .= '
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">'
                .$data["features"][$i]["name"].
            '</h5>
            <p class="card-text">
            '   .$data["features"][$i]["text"].'
            </p>
            <a href="'
                .$data["features"][$i]["href"].'
                " class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
';

}

?>


<h2 class="mb-3">Our features:</h2>
<div class="cards d-flex justify-content-center gap-3">
    <!-- cards -->

    <?= $out; ?>
    
</div>
