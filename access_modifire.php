<?php

//public (use any where)
//protected (use main class and subclass)
//private (use only main class)

class test
{
    public $name = "Mahmudul Hasan";
    protected $age = "23";
    private $department = "CSE";

    public function display()
    {
        echo "This Is The Public Method".$this->name."<br>";
        echo "This Is The Public Method".$this->age."<br>";
        echo "This Is The Public Method".$this->department."<br>";
    }

    
}

class test2 extends test
{
    public function display()
    {
        echo "This Is The Public Method".$this->name."<br>";
        echo "This Is The Public Method".$this->age."<br>";
        echo "This Is The Public Method".$this->department."<br>";
    }
}

$object = new test;

$object->$department;


?>