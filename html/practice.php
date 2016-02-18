<?php

//$friends = ['Mike','Nick','Kev'];
//
//foreach ($friends as $friend){
//    echo $friend . '<br>';
//}

$stuff = ['Gadgets', 'Cars', 'Computers'];

foreach ($stuff as $thing){
    echo $thing . '<br>';
}

$dimensions = [array('Mike','Nick','Kev'),array('Gadgets', 'Cars', 'Computers'),array('Red','Green','Blue')];

foreach ($dimensions[0] as $dimension) {
    echo $dimension . '<br>';
}

foreach ($dimensions as $dimension) {
    echo '<pre>';
    print_r($dimension);
    echo '</pre>';
}

foreach ($dimensions as $dimension) {
    foreach ($dimension as $space){
        echo $space . "<br>";
    }
    echo '<br>';
}

foreach($dimensions as $dimension) {
    echo 'Friends'. $dimension[0]. '<br>';
    echo 'Stuff'. $dimension[1]. '<br>';
    echo 'Colors'. $dimension[2]. '<br>';
    echo '<br>';
}

echo '<pre>';
print_r($dimensions[1][1]);
echo '</pre>';

$videogames= [
    'Halo'=>['title' => 'Halo', 'console'=> 'Xbox', 'price' => '60'],
    'DarkSouls' => ['title'=> 'Dark Souls','console'=>'Playstation','price'=>'60'],
    'MarioKart'=>['title'=>'Mario Kart','console'=>'Nintendo','price'=>'60']
    ];

foreach($videogames as $videogame){
    foreach($videogame as $key=>$value){
        echo $key. ' ' . $value . '<br>';
    }
};


