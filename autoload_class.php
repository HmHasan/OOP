<?php 

spl_autoload_register(function($class_name){

include("path/"."$class_name".".php");

});

?>