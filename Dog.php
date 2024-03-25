<?php
// Dog.php

require_once 'Animal.php';

    class Dog extends Animal {
        // Additional property specific to Dog class
        private string $breed;

        public function __construct(string $species, string $habitat, string $color, string $breed)
        {
            // Call parent class constructor with $species, implicitly provided by extend
            parent::__construct($species, $habitat, 4, $color);
            $this->breed = $breed;
        }

        // Method specific to Dog class
        public function bark()
        {
            echo "Woof! Woof!\n";
        }

        // Override the sound method from the parent class
        public function sound()
        {
            return $this->bark();
        }

        // Method to display information about the dog
        public function displayInfo()
        {
            parent::displayInfo();

            if (property_exists(get_class($this), 'breed')) {
                echo "Breed: " . $this->breed . "\n";
            }
        }

        // Method to wag the tail
        public function wagTail()
        {
            echo "Wagging tail...\n";
        }
    }
?>

