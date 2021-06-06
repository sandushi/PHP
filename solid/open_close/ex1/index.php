<?php

    require_once 'circle.php';
    require_once 'triangle.php';
    require_once 'square.php';
    require_once 'board.php';
    require_once 'shape1.php';
    

    $circle = new Circle(4);
    $square = new Square(4,5);
    $triangle = new Triangle(4,6);
    

    $shapes = array($circle, $square, $triangle);
    $board = new Board();
    echo "Area of all shapes are " .$board->calculateArea($shapes). "<br>";



?>