

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Num 1 : <input type="number" name="num1">
        Num 2 : <input type="number" name="num2">
        Calculate : <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>
<?php


    if(isset($_POST['submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        spl_autoload_register(function($class_name){
            include("class/".$class_name.".php");
        });
    
        $object = new java;
        echo $object->get_values($num1,$num2)->calculate();
        echo $object->mul();
    }


?>