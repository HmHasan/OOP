<?php

abstract class asb
{
    public $name;
    public $age;
    public function student()
    {
        echo $this->name. " is " .$this->age. " Years old";
    }

    abstract function details();
    
}

class boy extends asb
{
    public function describe()
    {
        return parent::student()." And I am a Diplma Engineer<br/>";
    }

    public function details()
    {
        echo " I Like To Coding";
    }
}

$ob = new boy;
$ob->name="Mahmud";
$ob->age="23";
echo $ob->describe();
$ob->details();


?>