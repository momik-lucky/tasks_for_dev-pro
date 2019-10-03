<?php
class Human
{
    public $name;
    public $type;
    public $hands;
    public $legs;
public function __construct($name, $type, $hands, $legs)
{
    $this->name = $name;
    $this->type = $type;
    $this->hands = $hands;
    $this->legs = $legs;
}
    public function move()
    {
        echo 'I am moving';
    }
    public function driving ()
    {
        echo 'Hello, I am a driver';
    }
    public function describeYourself()
    {
        echo "Hello, I am a $this->name, i $this->type', i have $this->hands, $this->legs";
    }
}
class Men extends Human
{
    public $myAge;
    public function __construct($name, $type, $hands, $legs, $myAge)
    {
        $this->myAge = $myAge;
        parent::__construct($name, $type, $hands, $legs);
    }
    public function describeYourself()
    {
        echo "Hello, I am a $this->name, i $this->type'. I have $this->hands hands, $this->legs legs. My age $this->myAge";
    }
}
class Men2 extends Human
{
    public $myAge;
    public function __construct($name, $type, $hands, $legs, $myAge, $gender)
    {
        $this->myAge = $myAge;
        $this->gender = $gender;
        parent::__construct($name, $type, $hands, $legs);
    }
    public function describeYourself()
    {
        echo "Hello, I am a $this->name, i $this->type, $this->gender. I have $this->hands hands, $this->legs legs. My age $this->myAge";
    }
}
$men1 = new Men('Ivan', 'driver', 2, 2, 20);
$men2 = new Men2('Masha', 'passenger', 2, 2, 18, 'female');
$men2->describeYourself();
$men1->describeYourself();
