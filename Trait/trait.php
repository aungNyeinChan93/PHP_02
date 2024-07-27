<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

interface AnimalInterface{
    public function eat();
    public function sleep();
};

interface DogIntrerface{
    public function bark();
}
interface Activities{
    public function jump();
    public function run();
    public function attack();
}

// trait
trait Physical_activity{
    static $P_name = "Physical_Trait <br>";
    public function jump(){
        echo "$this->name is jumping! <br>";
    }
    public function run(){
        echo "$this->name is running! <br>";
    }
    public  function attack(){
        echo  $this->name ." is attack! <br>";
    }
}


abstract class Animal implements AnimalInterface{
    public $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function eat(){
       echo "eat<br>"; 
    }

    public function sleep(){
        echo "sleep<br>";
    }
};

class Dog extends Animal implements DogIntrerface {
    use Physical_activity;
    public static $age ;
    public function __construct(string $name,int  $age){
        parent::__construct($name);
        self::$age = $age;
    }
    public function bark(){
        echo $this->name ." is bark <br>";
    }
};

$dog = new Dog("black",10);
echo Dog::$age;
$dog->sleep();
$dog->bark();
echo Dog::$P_name;
$dog->jump();
$dog->attack();


// Physical_activity::$name; 
//Accessing static trait property Physical_activity::$name is deprecated, 
// it should only be accessed on a class 