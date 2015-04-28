<?php
trait Owned
{
    function getOwner(){
        return $this->owner;
    }

}

class car{
    use Owned;

    private $owner = 'Andy';
}

class house {
    use Owned;
    private $owner = 'Tim';

}

$car = new Car();
$house = new House();

var_dump($car->getOwner());
var_dump($house->getOwner());


