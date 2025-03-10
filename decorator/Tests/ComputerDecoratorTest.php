<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPU;
use App\OledScreen;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);

        $this->assertSame(600, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer, including a GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OledScreen($laptop);

        $this->assertSame(500, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, including an OLED screen", $laptopWithOLEDScreen->getDescription());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);
        $laptopWithGPUAndOLEDScreen = new OledScreen($laptopWithGPU);

        $this->assertSame(700, $laptopWithGPUAndOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, including a GPU, including an OLED screen", $laptopWithGPUAndOLEDScreen->getDescription());
    }
}