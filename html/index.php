<!doctype html>
<?php
include('array.php');

$maincat = filter_var($_REQUEST['cat'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applebee's Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</head>
<body>
<h1>Applebee's Menu</h1>
<div class="container">
    <div class="row">


<!--switch and query structure-->
<?php

switch ($maincat){
    case "":
        foreach($Menu as $value) {
            echo "<div class='col-sm-4'>
                    <a href='".$value['Link']."'>
                    <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                    <h3>".$value['Title']."</h3>
                    </a>
                </div>";
        }
        break;
    case "twofor":
        $subcat = $Menu[0];
        break;
    case "twofor1":
        $subcat = $Menu[0][0];
        break;
    case "twofor2":
        $subcat = $Menu[0][1];
        break;
    case "better":
        $subcat = $Menu[1];
        break;
    case "better1":
        $subcat = $Menu[1][0];
        break;
    case "drinks":
        $subcat = $Menu[2];
        break;
    case "drinks1":
        $subcat = $Menu[2][0];
        break;
    case "drinks2":
        $subcat = $Menu[2][1];
        break;
    case "drinks3":
        $subcat = $Menu[2][2];
        break;
    case "burgers":
        $subcat = $Menu[3];
        break;
    case "burgers1":
        $subcat = $Menu[3][0];
        break;
    case "burgers2":
        $subcat = $Menu[3][1];
        break;
    case "desserts":
        $subcat = $Menu[4];
        break;
    case "main":
        $subcat = $Menu[5];
        break;
    case "main1":
        $subcat = $Menu[5][0];
        break;
    case "main2":
        $subcat = $Menu[5][1];
        break;
    case "main3":
        $subcat = $Menu[5][2];
        break;
    case "main4":
        $subcat = $Menu[5][3];
        break;
    case "main5":
        $subcat = $Menu[5][4];
        break;
    case "lunch":
        $subcat = $Menu[6];
        break;
    case "salads":
        $subcat = $Menu[7];
        break;
    case "pub":
        $subcat = $Menu[8];
        break;
    case "handhelds":
        $subcat = $Menu[9];
        break;
    case "kids":
        $subcat = $Menu[10];
        break;
}
        echo "<h2>".$subcat['Title']."</h2>";
        foreach (array_slice($subcat,3) as $value) {
            echo "<div class='col-sm-4'>
                    <a href='".$value['Link']."'>
                    <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                    <h3>".$value['Title']."</h3>
                    </a>
                </div>";
        }
        ?>
    </div>
</div>

</body>
</html>