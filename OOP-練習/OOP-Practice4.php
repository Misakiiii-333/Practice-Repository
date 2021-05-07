<?php

interface Shape {
  public function draw();
}

class Rectangle implements Shape {
  public function draw() {
    echo "Shape: Rectangle\r\n";
  }
}

class Circle implements Shape {
  public function draw() {
    echo "Shape: Circle\r\n";
  }
}

abstract class ShapeDecorator implements Shape {
  protected $decoratedShape;

  public function ShapeDecorator(Shape $decoratedShape){
    $this->decoratedShape = $decoratedShape;
  }

  public function draw(){
    $this->decoratedShape->draw();
  }    
}

class RedShapeDecorator extends ShapeDecorator {
  protected $decoratedShape;

  public function RedShapeDecorator(Shape $decoratedShape) {
    $this->decoratedShape = $decoratedShape;
  }

  public function draw() {
    $this->decoratedShape->draw();           
    $this->setRedBorder($this->decoratedShape);
  }

  private function setRedBorder(Shape $decoratedShape){
    echo "Border Color: Red\r\n";
  }
}

$circle = new Circle();
$rectangle = new Rectangle();
$redCircle = new RedShapeDecorator($circle);
$redRectangle = new RedShapeDecorator($rectangle);
echo "Circle with normal border\r\n";
$circle->draw();

echo "\nCircle of red border\r\n";
$redCircle->draw();

echo "\nRectangle of red border\r\n";
$redRectangle->draw();