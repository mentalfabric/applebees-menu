<?php

class myClass{
    public $prop = "I am a prop!";

    public function setProp($newval){
        $this->prop = $newval;
    }
    public function getProp(){
        return $this->prop . '<br/>';
    }
}

$obj = new myClass;
$house = new myClass;


//Get the Value
echo $obj->getProp();
echo $house->getProp();

//Set a new value
$obj->setProp("New value here");
$house->setProp("White");

//Print the new value
echo $obj->getProp();
echo $house->getProp();