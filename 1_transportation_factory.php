<?php

interface TransportationFactory {
    public function createNewCar();
    public function createNewTruck();
    public function createNewMotorcycle();
    public function createNewBicycle();
}

abstract class CreateNewTransportationFactory implements TransportationFactory {

    public function createNewCar() {
        return new Cars();
    }

    public function createNewTruck() {
        return new Trucks();
    }

    public function createNewMotorcycle() {
        return new Motorcycles();
    }

    public function createNewBicycle() {
        return new Bicycles();
    }
}

class Cars extends CreateNewTransportationFactory {

    public $move;
    public $type;

    public function getMove() {
        return $this->move;
    }
    public function getType() {
        return $this->type;
    }
}

class Trucks extends CreateNewTransportationFactory {

    public $move;
    public $type;

    public function getMove() {
        return $this->move;
    }
    public function getType() {
        return $this->type;
    }
}

class Motorcycles extends CreateNewTransportationFactory {

    public $move;
    public $type;

    public function getMove() {
        return $this->move;
    }
    public function getType() {
        return $this->type;
    }
}

class Bicycles extends CreateNewTransportationFactory {

    public $move;
    public $type;

    public function getMove() {
        return $this->move;
    }
    public function getType() {
        return $this->type;
    }
}
