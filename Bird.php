<?php
// Bird.php

require_once 'Animal.php';

class Bird extends Animal {
    // Additional property specific to Bird class
    private $canFly;
    
    // Constructor for Bird class
    public function __construct($species, $habitat, $legs, $color, $canFly) {
        // Call parent class constructor
        parent::__construct($species, $habitat, $legs, $color);
        
        // Initialize additional property
        $this->canFly = $canFly;
    }
    
    // Method specific to Bird class
    public function chirp() {
        echo "Chirp! Chirp!\n";
    }
    
    // Override the sound method from the parent class
    public function sound() {
        $this->chirp();
    }

    public function fly()
    {
        echo "Flying high...\n";
    }
    
    public function land()
    {
        echo "Landing gently...\n";
    }

    // Method to display information about the bird
    public function displayInfo() {
        parent::displayInfo();
        echo "Can Fly: " . ($this->canFly ? "Yes" : "No") . "\n";
    }
}
?>
