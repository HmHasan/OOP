<?php


 final class  test
{
    public function __construct()
    {
        echo "This Is The Class We Can't Inherit That";
    }
}

class test2 extends test
{
    public function __construct()
    {
        echo "We Just Try To Inherit Final Classs But We Fail";
    }
}

$object = new test2;

?>