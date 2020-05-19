<?php

class test
{
    public static $name = "Hasan";

    public static function display()
    {
        echo "This Person Name Is = ".self::$name;
    }
}

test::display();


?>