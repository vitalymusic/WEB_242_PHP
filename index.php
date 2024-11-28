<?php include "head.php"?>
<?php include "navbar.php"?>

<div class="container">
    <h1 class="text-center">Page 1</h1>
    <p>This is content text</p>
</div>

<div class="container">
    <?php 
        $out = "";
        
    if(!isset($_GET["tab"])) return;

        switch($_GET["tab"]){
            case "p1": $out = '
               <div class="card">
                    <div class="card-body">
                        This is page 1
                    </div>
                </div>';break;
            case "p2":$out = '
                <div class="card">
                     <div class="card-body">
                         This is page 2
                     </div>
                </div>';break; 
            case "p3":$out = '
                <div class="card">
                     <div class="card-body">
                         This is page 3
                     </div>
                </div>';break;

            default:$out = 'nothing';break;          
        }

        echo $out;
    ?>


</div>

<?php include "foot.php"?>