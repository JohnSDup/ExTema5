<?php

require_once 'gato.php'; 
require_once 'perro.php'; 


$Felix = new gato();
$Kira = new perro();

echo $Felix-> makeSound();
echo "</br>";
echo $Kira-> makeSound();




?>