<?php

include_once "Shape.php";
include_once "Square.php";
include_once "Rectangle.php";
include_once "Circle.php";
include_once "Cylinder.php";

$shapes[0] = new Circle("Circle", 5);
$shapes[1] = new Rectangle("Rectangle", 10, 15);
$shapes[2] = new Square("Square", 10);
$shapes[3] = new Cylinder("Cylinder", 5, 15);

foreach ($shapes as $shape) {
    echo $shape->show(). ": " . $shape->calculateArea() . "<br>";
    if ($shape instanceof Colorable) {
        echo $shape->show().": " . $shape->howToColor() . "<br>";
    }
}
