<?php
require_once 'Animal.php';

class Cat extends Animal {

    // Additional property specific to Cat class
    private string $furLength;

    public function __construct(string $species, string $habitat, string $color, string $furLength)
    {
        parent::__construct($species, $habitat, 4, $color);
        $this->furLength = $furLength;
    }

    // Method specific to Cat class
    public function meow()
    {
        echo "Meow! Meow!\n";
    }

    // Override the sound method from the parent class
    public function sound()
    {
        return $this->meow();
    }

    // Method to display information about the cat
    public function displayInfo()
    {
        parent::displayInfo();

        if (property_exists(get_class($this), 'furLength')) {
            echo "Fur Length: " . $this->furLength . "\n";
        }
    }

    // Method to clean itself
    public function clean()
    {
        echo "Cat is cleaning itself...\n";
    }
}
