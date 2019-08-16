<script>

/**
 * Assignment demostrating
 * class, subclass, attribute, method, object, inheritance, overidding, string interpolation
 * **/


    let moving;

    class Vehicle{
            constructor(Name, Brand, Color, no_of_tires, typeOfVehicle, highest_speed, lowest_speed){
            this.name = Name;
            this.brand = Brand;
            this.color = Color;
            this.tireNo = no_of_tires;
            this.typeOfVehicle = typeOfVehicle;
            this.highest_speed = highest_speed;
            this.lowest_speed = lowest_speed;
            }

             start_vehicle(moving = false){
                if(moving === false){
                    console.log('Wow!, Your can now move your ' + this.typeOfVehicle +", "+ 'Your new' +" "+ this.color, this.brand, this.name +" "+ 'is so cool.');
                }else{
                    console.log("Sorry you can't start your "  + this.typeOfVehicle +  " while its moving, stop_vehicle instead.");
                }
            }

            stop_vehicle(moving = true){
                if(moving === true){
                    console.log('Yooo! you have made alot of driving today, Your can now stop your ' + this.typeOfVehicle);
                }else{
                    console.log("Ouch! your "  + this.typeOfVehicle +  " is already at rest, no need stopping, start_vehicle instead.");
                }
            }

             move_vehicle(){
                if (this.lowest_speed >= 1) {
                    console.log('Wooo! Your '  + this.typeOfVehicle + ' is moving, at a speed of ' + this.lowest_speed + "mph you could speed_up_your_" + this.typeOfVehicle + " to move faster");
                } else {
                    console.log("sorry, Your "  + this.typeOfVehicle +  " currently can't move");
                }
            }

             speed_up_vehicle(moving = true){
                if (moving === true) {
                    console.log( `Your ${this.typeOfVehicle} is really fast, it could speed up to ${this.highest_speed}mph, Your ${this.typeOfVehicle} is currently moving at a speed of ${this.highest_speed}mph`);
                } else {
                    console.log("sorry, Your "  + this.typeOfVehicle +  " is not in motion");
                }
            }

           slow_down_vehicle(moving = true){
            if (moving === true) {
                console.log( `Your ${this.typeOfVehicle} is really slow, would you mind speeding it up to a speed of ${this.highest_speed}mph`);
            } else {
                console.log("sorry, Your "  + this.typeOfVehicle +  " is not moving");
            }

        }
    }

    class Plane extends  Vehicle{
        constructor(Name, Brand, Color, no_of_tires, typeOfVehicle, highest_speed, lowest_speed){
            super(Name, Brand, Color, no_of_tires, typeOfVehicle, highest_speed, lowest_speed);
        }

        stop_vehicle(moving = true){
                if(moving === true){
                    console.log('Yooo! Time to land make sure you are prepared to land ');
                    console.log('You successfully landed');
                }else{
                    console.log("Ouch! you "  + this.typeOfVehicle +  " is already at rest, no need stopping, start_vehicle instead.");
                }
            }

    }

    let vehicle1 = new Vehicle('Lexus 350', 'Toyota', 'Red', 'Four', 'car', 124, 2);
    let start_vehicle1 = vehicle1.start_vehicle(false);
    let stop_vehicle1 = vehicle1.stop_vehicle(true);

       
    let vehicle2 = new Vehicle('Bicycle', 'Tesla', 'Blue and white', 'two', 'Bicycle', 72, 1);
    let stop_vehicle2 = vehicle2.stop_vehicle(false);
    let start_vehicle2 = vehicle2.start_vehicle(true);
    let move_vehicle2 = vehicle2.move_vehicle();

    let vehicle3 = new Plane('Aeroplane', 'Boeing', 'Blue and Red', 'three', 'Plane', 900, 460);
    let stop_vehicle3 = vehicle3.speed_up_vehicle(true);
    let start_vehicle3 = vehicle3.slow_down_vehicle(true);
    let move_vehicle3 = vehicle3.stop_vehicle();
</script> 