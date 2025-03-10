<?php

namespace App\Factory;

use App\Entity\Entity;

class CarFactory extends Factory
{
    public function createEntity(): Entity
    {
        return new Car(10.0, "gasoline");
    }
}