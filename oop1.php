<?php

class car{
    public $color; //property
    
    public function setColor($c){
        return 'Car is : '.$this->color=$c;
    }
    
    public function sayHello() {
        return 'say Hello Git';
        
    }
}

$newcar=new car;
$test =$newcar->setColor('red');
echo $test.'<br>';

echo $newcar->sayHello();

echo '<br>';

echo $newcar->color='orange';


        