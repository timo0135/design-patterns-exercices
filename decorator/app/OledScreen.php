<?php

namespace App;

class OledScreen extends ComputerDecorator
{
    public function getPrice(): int
    {
        return $this->computer->getPrice() + 100;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ', including an OLED screen';
    }
}