<?php
class Cat{
    public $name;
    public static $count;
    public function __construct($name){
        $this->name = $name;
    }
    public static function meow(){
        echo "moew";
    }
}

$cat = new Cat("Nuustik");
$cat::$count = 1;
var_dump($cat);
$cat2 = new Cat("Tuustik");
$cat::$count = 2;
var_dump($cat2::$count);
var_dump($cat::$count);


require(__DIR__ . '../autoload.php');

$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_URI']);




























