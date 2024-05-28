<?php

namespace Zookeeper;
class Animal
{
    private $name;
    private $happiness;
    private $preferredFood;
    private $foodReserve;

    public function __construct($name, $preferredFood)
    {
        $this->name = $name;
        $this->happiness = 50;
        $this->preferredFood = ($preferredFood);
        $this->foodReserve = 100;
    }

    public function play()
    {
        $this->happiness += 10;
        $this->foodReserve -= 10;
    }

    public function work()
    {
        $this->happiness -= 10;
        $this->foodReserve -= 10;
    }

    public function feed($food)
    {
        if (strtolower($food) === strtolower($this->preferredFood)) {
            $this->foodReserve += 10;
        } else {
            $this->happiness -= 5;
            $this->foodReserve -= 20;
        }
    }

    public function pet()
    {
        $this->happiness += 10;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHappiness()
    {
        return $this->happiness;
    }

    public function getFoodReserve()
    {
        return $this->foodReserve;
    }

    public function getPreferredFood()
    {
        return $this->preferredFood;
    }
}