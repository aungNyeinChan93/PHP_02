<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", "1");


class Dog
{
    public $name;
    public $color;
    private $data= [];
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function __tostring()
    {
        return
            __METHOD__ . " function is Running !<br>" .
            "Class Name : " . __CLASS__ . "<br>" .
            " Name : " . $this->name . "<br>" .
            " color: " . $this->color . "<br>";
    }
    public function __invoke()
    {
        echo __METHOD__ . " method is running!<br> ";
    }
    public function __set($key, $value){
        $this->data[$key] = $value;
    }
    public function __get($key){
        return $this->data[$key];
    }
    public function __isset($key){
        return $this->data[$key];
    }
    public function __unset($key){
        return $this->data[$key]= "";
    }
    
}
$dog = new Dog("Bo Ne", "Brown");
var_dump($dog);
echo "<br>";
echo $dog; // __tostring method running
$dog();    // __invoke method is run

$dog->test = "testing";
echo "<br>". $dog->test."<br>";


if(isset($dog->test)){
    echo $dog->test ."<br>";   // run __isset method
}else{
    echo "not set yet! <br>";
}
unset($dog->test);
if(isset($dog->test)){
    echo $dog->test ."<br>";   
}else{
    echo "not set yet! <br>";  // __unset method run
}