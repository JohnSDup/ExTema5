<?php
require_once 'Animal.php'; 

class perro extends Animal {    
    function makeSound(): string {
        return "El perro dice Bup, bup!";
    }
}
?>