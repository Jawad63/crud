<?php

//creating a connection variable:

$connection = new mysqli('localhost', 'root', 'myPass123@', 'crudexercise');

if(!$connection){
   echo "connection successfull";
}

?>