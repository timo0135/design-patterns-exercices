<?php

namespace App\Factory;

use App\Entity\Entity;

abstract class Factory 
{
    public abstract function createEntity(): Entity;
}
