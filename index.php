<?php
    // index.php

    require_once 'Animal.php';
    require_once 'Dog.php';
    require_once 'Cat.php';
    require_once 'Bird.php';

    // Create instances of classes
    $animal = new Animal("Mammal", "Forest", 4, "Brown");
    $dog = new Dog("Canine", "Home", 4, "Brown");
    $cat = new Cat("Feline", "Urban", "Grey", "Short");
    $bird = new Bird('Aves', 'Mountain Forest', 2, 'Blue', true);

    // Display information and behaviors
    echo "Information about the animal:\n";
    $animal->displayInfo();
    echo "Animal sound: \n";
    $animal->sound();
    echo "\n";

    echo "\nInformation about the dog:\n";
    $dog->displayInfo();
    echo "Dog sound: \n";
    $dog->sound();
    echo "Dog behavior: \n";
    $dog->wagTail();


    echo "\nInformation about the cat:\n";
    $cat->displayInfo();
    echo "Cat sound: \n";
    $cat->sound();
    echo "Cat behavior: \n";
    $cat->clean();

    echo "\nInformation about the bird:\n";
    $bird->displayInfo();
    echo "Bird sound: \n";
    echo $bird->sound();
    echo "Bird behavior: \n";
    $bird->fly();
    $bird->land();
?>


