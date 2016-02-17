<!doctype html>
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
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/2for20.jpg" alt="">
            </a>
            <h3>
                <a href="./?category=twofor">2 for $20</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/barSnacks.jpg" alt="">
            </a>
            <h3>
                <a href="#">Apps and Bar Snacks</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/betterforyou.jpg" alt="">
            </a>
            <h3>
                <a href="#">Better For You</a>
            </h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/beverages.jpg" alt="">
            </a>
            <h3>
                <a href="#">Get Drunk</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/burgers.jpg" alt="">
            </a>
            <h3>
                <a href="#">Burgers</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/desserts.jpg" alt="">
            </a>
            <h3>
                <a href="#">Desserts</a>
            </h3>
        </div>
    </div>

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/entree_main_dishes.jpg" alt="">
            </a>
            <h3>
                <a href="#">Main Entrees</a>
            </h3>

        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/handhelds.jpg" alt="">
            </a>
            <h3>
                <a href="#">Handhelds</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/kids.jpg" alt="">
            </a>
            <h3>
                <a href="#">Kids</a>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/lunch_combos.jpg" alt="">
            </a>
            <h3>
                <a href="#">Combos</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/pubdiet.jpg" alt="">
            </a>
            <h3>
                <a href="#">Pub Diet</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="images/salads.jpg" alt="">
            </a>
            <h3>
                <a href="#">Salads</a>
            </h3>
        </div>
    </div>
</div>
<!--array structure-->
<?php
$Menu = array (
    array('Title' => 'Two For Twenty',
        'ImageLoc' => './img/maincat/2for20.jpg',
        'Link' => './?category=twofor',
        array('Title' => 'Appetizers',
            'ImageLoc' => './img/twofor/app/mozzarella_sticks.jpg',
            'Link' => './page.php',
            array('Title' => 'Mozzarella Sticks', 'ImageLoc' => './img/twofor/app/mozzarella_sticks.jpg'),
            array('Title' => 'Crunchy Onion Rings', 'ImageLoc' => './img/twofor/app/onion_rings.jpg'),
            array('Title' => 'Two Side Salads(House or Caesar)', 'ImageLoc' => './img/twofor/app/caesar_salad.jpg')
            ),
        array('Title' => 'Entrees',
            'ImageLoc' => 'llama',
            'Link' => './page.php',
            array('Title' => 'Three-Cheese Chicken Penne', 'ImageLoc' => 'llama'),
            array('Title' => 'Chicken Tenders Basket', 'ImageLoc' => 'llama'),
            array('Title' => 'The American Standard', 'ImageLoc' => 'llama')
            )
        ),

    array('Title' => 'Better For You',
        'ImageLoc' => 'llama',
        array('Title' => 'The Smarter Choice',
            'ImageLoc' => 'llama',
            'Link' => './page.php',
            array('Title' => 'Hot Shot Whiskey Chicken', 'ImageLoc' => 'llama'),
            array('Title' => 'Savory Cedar Salmon', 'ImageLoc' => 'llama'),
            array('Title' => 'Shrimp Wonton Stir-Fry', 'ImageLoc' => 'llama')
            )
        ),

    array('Title' => 'Beverages',
        'ImageLoc' => 'llama',
        'Link' => './page.php',
        array('Title' => 'Beers',
            'ImageLoc' => 'llama',
            'Link'=>'./page.php',
            array('Title' => 'Neighborhood Favorites', 'ImageLoc' => 'llama'),
            array('Title' => 'Wines', 'ImageLoc' => 'llama')
            ),
        array('Title' => 'Refreshments',
            'ImageLoc' => 'llama',
            'Link' => './page.php',
            array( 'Title' => 'Tea', 'ImageLoc' => 'llama'),
            array('Title' => 'Lemonaid', 'ImageLoc' => 'llama'),
            array('Title' => 'Lime-aids', 'ImageLoc' => 'llama')
            )
        ),

    array('Title' => 'Burgers',
        'ImageLoc' => 'llama',
        'Link' => './page.php',
        array('Title' => 'Mushroom', 'ImageLoc' => 'llama'),
        array('Title' => 'American', 'ImageLoc' => 'llama'),
        array('Title' => 'TripleBacon', 'ImageLoc' => 'llama')
        ),

    array('Title' => 'Desserts',
        'ImageLoc' => 'llama',
        'Link' => '',
        array('Title' => 'TripleChoc', 'ImageLoc' => 'llama'),
        array('Title' => 'MapleBlonde', 'ImageLoc' => 'llama'),
        array('Title' => 'AppleCheeseCake', 'ImageLoc' => 'llama')
        ),

    array('Title' => 'MainEntrees',
        'ImageLoc' => 'llama',
        'Link' => './page.php',
        array('Title' => 'Steak',
            'ImageLoc' => 'llama',
            'Link' => './page.php',
            array('Title' => 'GrilledOnionSirloin', 'ImageLoc' => 'llama'),
            array('Title' => 'Sirloin', 'ImageLoc' => 'llama'),
            array('Title' => 'PepperSirloin', 'ImageLoc' => 'llama')
            ),
        array('Title' => 'Ribs',
            'ImageLoc' => 'llama',
            'Link' => './page.php',
            array('Title' => 'Riblets', 'ImageLoc' => 'llama'),
            array('Title' => 'BabyBack', 'ImageLoc' => 'llama')
            ),
        array('Title' => 'Chicken',
            'ImageLoc' => 'llama',
            'Link' => './page.php',
            array('Title' => 'BrewHouse', 'ImageLoc' => 'llama'),
            array('Title' => 'BurbonChicken', 'ImageLoc' => 'llama'),
            array('Title' => 'ChickenTend', 'ImageLoc' => 'llama')
            )
        ),

    array('Title' => 'Lunch Combos',
        'ImageLoc' => 'llama',
        'Link' => './page.php',
        array('Title' => 'Tomato Basil Soup +  French Onion Soup', 'ImageLoc' => 'llama'),
        array('Title' => 'House Salad(contains bacon) + Clubhouse Grille', 'ImageLoc' => 'llama'),
        array('Title' => 'Chicken Fajita Rollup + Shrimp Scampi Linguine', 'ImageLoc' => 'llama')
        ),

    array('Title' => 'Salads',
        'ImageLoc' => 'llama',
        'Link' => '',
        array('Title' => 'ThaiShrimp', 'ImageLoc' => 'llama'),
        array('Title' => 'FiestaChicken', 'ImageLoc' => 'llama'),
        array('Title' => 'ChickenCeasar', 'ImageLoc' => 'llama')
        ),

    array('Title' => 'PubDiet',
        'ImageLoc' => 'llama',
        'Link' => './page.php',
        array('Title' => 'ShrimpWonton', 'ImageLoc' => 'llama'),
        array('Title' => 'SirloinStout', 'ImageLoc' => 'llama'),
        array('Title' => 'CedarChicken', 'ImageLoc' => 'llama')
        ),

    array('Title' => 'Handhelds',
        'ImageLoc' => 'llama',
        'Link' => './page.php',
        array('Title' => 'New Triple Hog Dare Ya', 'ImageLoc' => 'triple_hog_dare_ya.jpg'),
        array('Title' => 'New Kickin Turkey Stacker', 'ImageLoc' => 'turkey_stacker.jpg'),
        array('Title' => 'American BLT', 'ImageLoc' => 'blt.jpg')
        ),

    array('Title' => 'Kids',
        'ImageLoc' => './images/kid1.jpg',
        'Link' => './?category=kids',
        array('Title' => 'Kid1', 'ImageLoc' => 'llama'),
        array('Title' => 'Kid2', 'ImageLoc' => 'llama'),
        array('Title' => 'Kid3', 'ImageLoc' => 'llama')
        )
);
?>
<!--switch and query structure-->
<?php
$maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

switch ($maincat){
    case "":
        foreach($Menu as $value) {
            echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
        }

        break;
    case "twofor":
        echo "<h2>Two For Twenty</h2>";
        $twofor = $Menu[0];

        foreach (array_slice($twofor,3) as $value) {
            echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
        }


        break;
    case "better":

        echo "<h2>Better For You</h2>";
        $better = $Menu[1];

        foreach (array_slice($better,3) as $value) {
            echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
        }
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
}
?>

<!-- /.row -->
</body>
</html>