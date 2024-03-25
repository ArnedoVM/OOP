<?php
// Animal.php

class Animal {
    // Properties
    protected $species;
    protected $habitat;
    protected $legs;
    protected $color;
    
    // Constructor
    public function __construct($species, $habitat, $legs, $color) {
        $this->species = $species;
        $this->habitat = $habitat;
        $this->legs = $legs;
        $this->color = $color;
    }
    
    // Method to get the species
    public function getSpecies() {
        return $this->species;
    }
    
    // Method to make the animal sound
    public function sound() {
        echo "Animal sound!\n";
    }
    
    // Method to display information about the animal
    public function displayInfo() {
        echo "Species: " . $this->getSpecies() . "\n";
        echo "Habitat: " . $this->habitat . "\n";
        echo "Number of legs: " . $this->legs . "\n";
        echo "Color: " . $this->color . "\n";
    }
}
?>

