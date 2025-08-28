<?php
// name of the class will be Rectangle
class Rectangle {
    // default values for width and height is 1
    private $width = 1;
    private $height = 1;

    // Constructor to create a rectangle with the specified width and height
    public function __construct($width = 1, $height = 1) {
        $this->width = $width;
        $this->height = $height;
    }

    // method to return area of the rectangle
    public function getArea() {
        return $this->width * $this->height;
    }

    // method to return perimeter of the rectangle
    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Sample object
$rect = new Rectangle(6, 4);
echo "Area: " . $rect->getArea() . "\n";         // Output should be: Area: 24
echo "Perimeter: " . $rect->getPerimeter();      // Output should be: Perimeter: 20
?>
