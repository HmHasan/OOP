<?php 

class school
{
    public function student()
    {
        echo "I am a School Boy";
    }
}

if(class_exists("schooll"))
{
    $ob = new school;
   
} else {
    echo "Class Not Found";
}

if(method_exists($ob,"student"))
{
    $ob->student();
}

else
{
   echo  "method not found";
}



?>