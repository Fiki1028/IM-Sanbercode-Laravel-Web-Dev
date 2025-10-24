<?php

require_once 'animal.php'; 

class Frog extends Animal
{
    public $cold_blooded = "no";
    
    public function jump()
    {
        return "Hop Hop";
    }
}

?>