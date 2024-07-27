<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", "1");

class Dog{
    private $name;
    public $color;
    protected $legs;
    public $dataBase;

    public function __construct(string $name,string $color, int $legs){
        $this->name = $name;
        $this->color = $color;
        $this->legs = $legs;
        $this->connect();
    }
    public function __sleep(){
        // __sleep method run when serialize()
        return ["name","color"]; // hide ["legs","dataBase"]
    }
    public function connect(){
        $this->dataBase = "heavy loaded!<br>";
    }
    public function __wakeup(){
        // __wakeup method run when unserialize()
        $this->legs = 4;
        $this->connect();
    }
    public function __clone(){
        $this->color = "white";
    }
    public function __debugInfo()
    {
        return [
            "Dog_Color" => $this->color = "green",
            "Dog_Name" => $this->name,
            "Dog_Legs" => $this->legs,
        ];
    }
}

$dog = new Dog("bobo","red",4);
$s_dog = serialize($dog);
print_r($s_dog);
echo "<br>";

$u_dog = unserialize($s_dog);
print_r($u_dog);
echo $u_dog->dataBase;

$dogClone = clone $dog;
echo $dogClone->color;

if($dog === $dogClone){
    echo "<br> = = = <br>";
}else if ($dog == $dogClone){
    echo "<br> = = <br>";
}else{
    echo "<br>not same<br>";
}
echo "<br>";

var_dump($dog); // __defugInfo running


