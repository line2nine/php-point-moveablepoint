<?php
include_once "class/Point.php";
include_once "class/MoveAblePoint.php";

$point = new Point();
$point->setXY(4, 7);
echo "Point is: " . $point->getXY() . "<br/>";

$moveAblePoint = new MoveablePoint();
$moveAblePoint->setX(2);
$moveAblePoint->setY(3);
$moveAblePoint->setXSpeed(5);
$moveAblePoint->setYSpeed(9);
echo "<br>Start point: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "After move 1: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "After move 2: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "After move 3: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "After move 4: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "After move 5: " . $moveAblePoint . "<br/>";