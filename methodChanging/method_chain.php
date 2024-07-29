<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

class Worker {
    public string $name;
    public int $hour = 0;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function sleep():Worker{
        $this->hour += 6;
        echo __CLASS__." is eating!<br>";
        return $this;
    }
    public function work():Worker{
        $this->hour += 10;
        echo __CLASS__." is working!<br>";
        return $this;
    }
    public function rest():Worker{
        $this->hour += 2;
        echo __CLASS__." is rest!<br>";
        return $this;
    }
    public function eat(string ...$foods):Worker{
        $this->hour += 1;
        $res = "worker is eating ";
        foreach($foods as $food){
            $res.= $food ." ,";
        }
        echo $res."<br>";
        return $this;
    }
}

$worker = new Worker("Mr Jane");
$worker->eat("rice","cake","tea")->work()->rest()->sleep();
echo $worker->hour;
echo "<br>";

class JuiceMaker {
    private static $_instance;

    public static function start(){
        // dynamic obj maker || initailizer
        if(!self::$_instance instanceof JuiceMaker){
            self::$_instance = new JuiceMaker;
        }
        echo __CLASS__." is running!<br>";
        return self::$_instance;
    }
    public function addWater(int $ml):JuiceMaker{
        echo __METHOD__." $ml ml! <br>";
        return $this;
    }
    public function addFlavour(string $falvour):JuiceMaker{
        echo __FUNCTION__ . " ::$falvour flavour added! <br> ";
        return $this;
    }   
}

JuiceMaker::start()->addWater(10)->addFlavour("orange");
JuiceMaker::start()->addWater(50)->addFlavour("mango");


define("DD",realpath("."));
var_dump(DD);