<?php 

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

class Dog{
    public $name;
    private $array = [];
    public function __construct(string $name){
        $this->name = $name;
    }
    public function __destruct(){
        echo "<br>". __CLASS__." class destruct";
    }
    public function __set($key, $value){
        $this->array[$key]= $value;
    }
    public function __get($key){
        return $this->array[$key];
    }
    public function __call($method,array $args){
        print_r($args);
        print_r($method);
    }
    public static function __callStatic($method, $args){
        var_dump($method, $args);
    }

};

$dog = new Dog("aungNet");
$dog->age = 10;                 // properties overloading && run __set method
echo $dog->age ."<br>";         // run __get method
$dog->eat(["foods"]);           // method overloading run __call method
Dog::run("fast");               // static method overloading && run __callStatic method          

// -----------------------------------------------------------  //



