<?php

use Zookeeper\Zookeeper;
use Zookeeper\Animal;
require 'vendor/autoload.php';

$zookeeper = new Zookeeper();
$zookeeper->addAnimal(new Animal('Tiger', 'Meat'));
$zookeeper->addAnimal(new Animal('Elephant', 'Vegetables'));
$zookeeper->addAnimal(new Animal('Monkey', 'Fruit'));

while (true) {
    echo "Welcome to the zoo\n";
    echo "1. List all animals\n";
    echo "2. Feed an animal\n";
    echo "3. Pet an animal\n";
    echo "4. Play with an animal\n";
    echo "5. Work with an animal\n";
    echo "6. Exit\n";
    $choice = readline('Enter your choice: ');
    switch ($choice) {
        case '1':
            foreach ($zookeeper->animals as $animal) {
                echo "Animal: " . $animal->getName() . "\n";
                echo "Happiness: " . $animal->getHappiness() . "\n";
                echo "Food Reserve: " . $animal->getFoodReserve() . "\n";
                echo "Preferred food: " . $animal->getPreferredFood() . "\n";
                echo "-----------------------\n";
            }
            break;
        case '2':
            $name = readline('Enter the name of the animal: ');
            $food = readline('Enter the food to feed the animal: ');
            $zookeeper->feedAnimal($name, $food);
            break;
        case '3':
            $name = readline('Enter the name of the animal: ');
            $zookeeper->petAnimal($name);
            break;
        case '4':
            $name = readline('Enter the name of the animal: ');
            $zookeeper->playAnimal($name);
            break;
        case '5':
            $name = readline('Enter the name of the animal: ');
            $zookeeper->workAnimal($name);
            break;
        case '6':
            echo "Goodbye!\n";
            exit;
        default:
            echo "Invalid choice\n";
            break;
    }

}