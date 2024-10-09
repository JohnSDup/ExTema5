<?php
require_once 'Animal.php';

class gato extends Animal {    
    public function makeSound(): string {
        return   "El gato dice Meu!";
    }
}
?>