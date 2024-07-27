<?php

define("PI",3.14);
class Dog
{
    public static $name;

    const LEGS = 4;

}

Dog::$name = "Aung Net";
echo Dog::$name ."\n";
echo Dog::LEGS ."\n";  // 4 :: const is the family mamber of static 
echo PI;

// megic constant 

class Magic_constant {
    public static function function(){
        echo "<br>Name of function :: ".__FUNCTION__;
    }
    public static function method(){
        echo "<br>Name of method :: ".__METHOD__;
    }
    public static function class(){
        echo "<br>Name of class :: ".__CLASS__;
    }
    public static function line(){
        echo "<br> line :: ".__LINE__;
    }
    public static function dir(){
        echo "<br> Dir :: ".__DIR__;
    }
    public static function file(){
        echo "<br> File  :: ".__FILE__;
    }
};
Magic_constant::function();
Magic_constant::method();
Magic_constant::class();
Magic_constant::line();
Magic_constant::dir();
Magic_constant::file();