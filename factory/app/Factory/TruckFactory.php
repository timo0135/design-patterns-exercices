<?php

namespace App\Factory;

use App\Entity\Entity;

class TruckFactory extends Factory
{
    public function createEntity(): Entity
    {
        return new Truck(15.0, "diesel");
    }
}