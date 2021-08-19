<?php

//creating a connection variable:

$connection = new mysqli('localhost', 'root', 'myPass123@', 'crudoperation');

if(!$connection){
   echo "connection successfull";
}


?>