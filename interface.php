<?php


//interface an Empty Class

// Class Method Has No BodyPart

// In this Class Only Method Declaration

// Multiple interface can call One class

interface student
{
    public function teacher();

}
interface Doctor
{
    public function Doctor();
}

interface Engineer
{
    public function Engineer();
}



class display implements student,Doctor
{
    public function __construct()
    {
        $this->teacher();
        $this->Doctor();
        $this->Engineer();
    }
    public function teacher()
    {
        echo " I am A School Teacher";
    }
    public function Doctor()
    {
        echo " I am A Doctor";
    }
    public function Engineer()
    {
        echo " I am Engineer";
    }
}
class studnet implements student,Doctor
{
    public function __construct()
    {
        $this->teacher();
        $this->Doctor();
        $this->Engineer();
    }
    public function teacher()
    {
        echo " I am A School Teacher";
    }
    public function Doctor()
    {
        echo " I am A Doctor";
    }
    public function Engineer()
    {
        echo " I am Engineer";
    }
}

$object = new display;

$object = new studnet;

?>