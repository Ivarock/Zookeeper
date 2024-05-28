<?php

namespace Zookeeper;
class Zookeeper
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function getAnimal(string $name): ?Animal
    {
        foreach ($this->animals as $animal) {
            if (strtolower($animal->getName()) === strtolower($name)) {
                return $animal;
            }
        }
        return null;
    }

    public function feedAnimal(string $name, string $food): void
    {
        $animal = $this->getAnimal($name);
        if ($animal) {
            $animal->feed($food);
            echo "Fed $name with $food. Last fed: {$animal->getLastFed()} \n";
        } else {
            echo "There are no $name's in our zoo.\n";
        }
    }

    public function petAnimal(string $name): void
    {
        $animal = $this->getAnimal($name);
        if ($animal) {
            $animal->pet();
            echo "Pet $name. Last petted: {$animal->getLastPetted()} \n";
        } else {
            echo "There are no $name's in our zoo.\n";
        }

    }

    public function playAnimal(string $name): void
    {
        $animal = $this->getAnimal($name);
        if ($animal) {
            $animal->play();
            echo "Played with $name. Last played: {$animal->getLastPlayed()} \n";
        } else {
            echo "There are no $name's in our zoo.\n";
        }
    }

    public function workAnimal(string $name): void
    {
        $animal = $this->getAnimal($name);
        if ($animal) {
            $animal->work();
            echo "Worked with $name. Last worked: {$animal->getLastWorked()} \n";
        } else {
            echo "There are no $name's in our zoo.\n";
        }
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }
}