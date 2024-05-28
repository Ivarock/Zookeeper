<?php

namespace Zookeeper;
class Zookeeper
{
    public $animals = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function getAnimal($name)
    {
        foreach ($this->animals as $animal) {
            if (strtolower($animal->getName()) === strtolower($name)) {
                return $animal;
            }
        }
        return null;
    }

    public function feedAnimal($name, $food)
    {
        $animal = $this->getAnimal($name);
        $animal->feed($food);
    }

    public function petAnimal($name)
    {
        $animal = $this->getAnimal($name);
        $animal->pet();
    }

    public function playAnimal($name)
    {
        $animal = $this->getAnimal($name);
        $animal->play();
    }

    public function workAnimal($name)
    {
        $animal = $this->getAnimal($name);
        $animal->work();
    }
}