<?php

abstract class Shape {
    private $something;
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;
    
    public function __construct($base, $height, $something) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(6, 8);
$rectangle = new Rectangle(5, 10);

echo "Area of Triangle: " . $triangle->calculateArea() . "\n";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n";