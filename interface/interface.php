<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("dissplay_errors", "1");

interface Animal
{
    public function eat();
    public function sleep();

}
interface DogInterface
{
    public function bark();
}

class Dog implements Animal, DogInterface
{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function eat() :string
    {
        return $this->name . "is eating ";
    }
    public function sleep():string
    {
        return $this->name . "is sleeping ";
    }
    public function bark():void
    {
        echo "<br> $this->name is bark<br> ";
    }
}
$dog = new Dog("black");
echo $dog->getName();
echo $dog->eat();
echo $dog->sleep();
$dog->bark();
