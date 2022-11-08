<?php
    class Animal{
        public $weight = 20;
        public $height = 5;
        public $color = 'red';
        public $size =  'big';
        
        public function move()
        {
            echo "Moving <br>";
        }

        public function eat()
        {
            echo "Eating <b>";
        }
      }

      class dog extends Animal
      {

      }


      //$animal = new Animal();
      //$animal ->move();

      $dog =  new dog();
      $dog ->move();
      echo "<br>";
      echo $dog->color;
      echo "<br>";
      echo $dog->weight;
?>