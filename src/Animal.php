<?php

namespace Zookeeper;
use Carbon\Carbon;
class Animal
{

    private string $name;
    private int $happiness;
    private string $preferredFood;
    private int $foodReserve;

    private ?Carbon $lastFed;
    private ?Carbon $lastPetted;
    private ?Carbon $lastPlayed;
    private ?Carbon $lastWorked;

    public function __construct(string $name, string $preferredFood)
    {
        $this->name = $name;
        $this->happiness = 50;
        $this->preferredFood = ($preferredFood);
        $this->foodReserve = 100;
        $this->lastFed = null;
        $this->lastPetted = null;
        $this->lastPlayed = null;
        $this->lastWorked = null;
    }

    public function feed(string $food): void
    {
        if (strtolower($food) === strtolower($this->preferredFood)) {
            $this->foodReserve += 10;
        } else {
            $this->happiness -= 5;
            $this->foodReserve -= 20;
        }
        $this->lastFed = Carbon::now();
    }

    public function pet(): void
    {
        $this->happiness += 10;
        $this->lastPetted = Carbon::now();
    }

    public function play(): void
    {
        $this->happiness += 10;
        $this->foodReserve -= 10;
        $this->lastPlayed = Carbon::now();
    }

    public function work(): void
    {
        $this->happiness -= 10;
        $this->foodReserve -= 10;
        $this->lastWorked = Carbon::now();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHappiness(): int
    {
        return $this->happiness;
    }

    public function getFoodReserve(): int
    {
        return $this->foodReserve;
    }

    public function getPreferredFood(): string
    {
        return $this->preferredFood;
    }

    public function getLastFed(): ?Carbon
    {
        return $this->lastFed;
    }

    public function getLastPetted(): ?Carbon
    {
        return $this->lastPetted;
    }

    public function getLastPlayed(): ?Carbon
    {
        return $this->lastPlayed;
    }

    public function getLastWorked(): ?Carbon
    {
        return $this->lastWorked;
    }
}