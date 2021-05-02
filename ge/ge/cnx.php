<?php 

$con=mysqli_connect("localhost:3308","root","","g");
if(!$con){
   die("erreur de type" .mysqli_connect_error());
 }
else "OK";

?>