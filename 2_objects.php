<?php

interface AllTransport {
    function __toString();
}
/**
 * Class Transportation
 */
abstract class Transportation implements Transport {
    public $power;
    public $speedMax;
    public $color;
    public $types;


    public function __construct($power, $speedMax, $type, $color) {
        $this->power = $power;
        $this->speedMax = $speedMax;
        $this->color = $color;

    }

    public function __toString() {
        return $this->power . $this->speedMax . '' . $this->types . '' . $this->color .;
    }

    public function directionStraight() {
        echo 'Straight';
    }

    public function directionLeft() {
        echo 'Left';
    }


    public function directionRight() {
        echo 'Right';
    }

    public function directionBack() {
        echo 'Back';
    }

    public function speedSlow() {
        echo 'Slowly';
    }

    public function speedFast() {
        echo 'Fast';
    }
}


abstract class Person implements Info {
    public $gender;
    public $age;
    public $name;
    public $personInside;

    public function __construct($gender, $age) {
        $this->gender = $gender;
        $this->age = $age;
    }

    public function __toString() {
        return $this->gender . '' . $this->age . '' . $this->name;
    }

    public function namePerson() {
        return $this->name;
    }

    public function personInsideTransportation() {
        return $this->personInside;
    }
}



class Car extends Transportation {
    public $typeCar;
    public $Car;


    public function typeCar() {
        return $this->typeCar;
    }


    public function Car() {
        return $this->Car;
    }
}


class Truck extends Transportation {
    public $capacity;


    public function getCapacity(){
        return $this->capacity;
    }
}


class Motorcycle extends Transportation {
    public $typeMotorcycle;
    public $engine;


    public function typeMotorcycle() {
        return $this->typeMotorcycle;
    }


    public function drive(){
        if(isset($this->engine)){
            echo 'I are moving on a motorcycle.';
        } else {
            echo 'aldeady no';
        }
    }
}


class Bicycle extends Transportation {
    public $bicycle = 'bicycle';


    public function sportBicycle() {
        return $this->bicycle;
    }


}


class Driver extends Person {
    public $documents;


    public function getDocuments() {
        return $this->documents;
    }
}


class Passenger extends Person {
    public $ticket;


    public function getTicket() {
        return $this->ticket;
    }
}
$driver = new Driver('gender driver - man' . "\n", 'age driver - 20' . "\n");
echo $driver->__toString();
$driver->personInside = 'Driver inside';
echo $driver->personInsideTransportation();
echo "\n";
$passenger = new Passenger('gender passenger - woman' . "\n", 'age passenger - 18' . "\n");
echo $passenger->__toString();
$unknownСar = new Car('power - 200' . "\n", 'max speed - 200' . "\n", 'unknown car' . "\n", 'color - red' . "\n");
echo $unknownСar->__toString();
$unknownСar->typeCar = 'sedan';
echo $unknownСar->typeCar() . "\n";
$unknownСar->fastSpeed();
echo "\n";
echo $unknownСar->directionRight() . "\n";
$bicycle = new Bicycle('power - 10' . "\n", 'max speed - 40' . "\n", 'model - unknown' . "\n", 'color - red'. "\n");
