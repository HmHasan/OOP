<?php


class poly
{
    // polymorphism
    //when we start to extends class and add funtion which was not previosly even ovrride method
    //the basis of polymorphism and overriden method

    public $name = "Mahmudul Hasan";

    public function display()
    {
        echo "This Is The Polymorphism";
    }

}

    class department extends poly
    {
        public $department = "Computer";
        public function display()
        {
            echo "Person Department Is  = {$this->department} and name is = {$this->name}";
        }
    }

    $object = new department;
    $object->display();

    if($object instanceof poly)
    {
        echo "This Is Instance Of Main Class";
    }

    else
    {
        echo "This Is not Instance Of Main Class";
    }


?>