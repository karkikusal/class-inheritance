<?php

class car{
    public $speed=10;
    public $seat=4;
    public $position=100;
    public $fuel=50;
    public $color= 'black';


   

    function move()
    {
        echo "<br>";
        echo "i am moving, with current speed" . $this->speed;
    }
}

$car = new car;
echo $car->speed;
echo '<br>';
echo $car->fuel;
echo '<br>';
echo $car->color;
echo $car->move();

?>