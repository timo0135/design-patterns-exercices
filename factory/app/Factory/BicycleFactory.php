<?php

namespace App\Entity;

class BicycleFactory extends Factory
{
    public function createEntity(): Entity
    {
        return new Bicycle(0.01, "muscle");
    }
}