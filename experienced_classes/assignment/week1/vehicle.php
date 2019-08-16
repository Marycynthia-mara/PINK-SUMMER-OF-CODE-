<?php
/**
 * Assignment demostrating
 * encapsulation
 * **/


    $moving;

    class Vehicle{
         
         protected $name;
         protected $brand;
         protected $color;
         protected $no_of_tires;
         protected $highest_speed;
         protected $lowest_speed;
         protected $typeOfVehicle;
         
            public function __construct($Name, $Brand, $Color, $no_of_tires, $typeOfVehicle, $highest_speed, $lowest_speed){
            $this->name = $Name;
            $this->brand = $Brand;
            $this->color = $Color;
            $this->tireNo = $no_of_tires;
            $this->typeOfVehicle = $typeOfVehicle;
            $this->highest_speed = $highest_speed;
            $this->lowest_speed = $lowest_speed;
            }

            public function start_vehicle($moving = false){
                if($moving === false){
                    echo "Wow!, Your can now move your " . $this->typeOfVehicle .", ". 'Your new' ." ". $this->color .", ". $this->brand .", ". $this->name ." ". "is so cool.<br>";
                }else{
                    echo "Sorry you can't start your "  . $this->typeOfVehicle .  " while its moving, stop_vehicle instead.<br>";
                }
            }

            public function stop_vehicle($moving = true){
                if($moving === true){
                    echo ('Yooo! you have made alot of driving today, Your can now stop your ' . $this->typeOfVehicle . "<br>");
                }else{
                    echo ("Ouch! your "  . $this->typeOfVehicle .  " is already at rest, no need stopping, start_vehicle instead.<br>");
                }
            }

            public function move_vehicle(){
                if ($this->lowest_speed >= 1) {
                    echo ('Wooo! Your '  . $this->typeOfVehicle . ' is moving, at a speed of ' . $this->lowest_speed . "mph you could speed_up_your_" . $this->typeOfVehicle . " to move faster.<br>");
                } else {
                    echo ("sorry, Your "  . $this->typeOfVehicle .  " currently can't move.<br>");
                }
            }

            public function speed_up_vehicle($moving = true){
                if ($moving === true) {
                    echo ( "Your " . $this->typeOfVehicle. " is really fast, it could speed up to " .$this->highest_speed ." mph, Your". $this->typeOfVehicle ." is currently moving at a speed of " . $this->highest_speed. " mph.<br>");
                } else {
                    echo ("sorry, Your "  . $this->typeOfVehicle .  " is not in motion.<br>");
                }
            }

            public function slow_down_vehicle($moving = true){
            if ($moving === true) {
                echo ( "Your " . " $this->typeOfVehicle is really slow, would you mind speeding it up to a speed of $this->highest_speed " . "  mph.<br>");
            } else {
                echo ("sorry, Your "  . $this->typeOfVehicle .  " is not moving.<br>");
            }

        }
    }

    class Plane extends  Vehicle{

         function stop_vehicle($moving = true){
                if($moving === true){
                    echo ('Yooo! Time to land make sure you are prepared to land <br>');
                    echo ('You successfully landed.<br>');
                }else{
                    echo ("Ouch! you "  . $this->typeOfVehicle .  " is already at rest, no need stopping, start_vehicle instead.<br>");
                }
            }

    }

    $vehicle1 = new Vehicle('Lexus 350', 'Toyota', 'Red', 'Four', 'car', 124, 2);
    $start_vehicle1 = $vehicle1->start_vehicle(false);
    $stop_vehicle1 = $vehicle1->stop_vehicle(true);

    $vehicle2 = new Vehicle('Bicycle', 'Tesla', 'Blue and white', 'two', 'Bicycle', 72, 1);
    $stop_vehicle2 = $vehicle2->stop_vehicle(false);
    $start_vehicle2 = $vehicle2->start_vehicle(true);
    $move_vehicle2 = $vehicle2->move_vehicle();

    $vehicle3 = new Plane('Aeroplane', 'Boeing', 'Blue and Red', 'three', 'Plane', 900, 460);
    $stop_vehicle3 = $vehicle3->speed_up_vehicle(true);
    $start_vehicle3 = $vehicle3->slow_down_vehicle(true);
    $move_vehicle3 = $vehicle3->stop_vehicle();
?>