<?php
include_once "class/Point.php";
include_once "class/MoveAblePoint.php";

$point = new Point();
$point->setXY(4, 7);
echo "Point: " . $point->getXY() . "<br/>";

$moveAblePoint = new MoveablePoint();
$moveAblePoint->setX(2);
$moveAblePoint->setY(3);
$moveAblePoint->setXSpeed(5);
$moveAblePoint->setYSpeed(9);
echo "<br>Điểm bắt đầu: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "Đi lần 1: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "Đi lần 2: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "Đi lần 3: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "Đi lần 4: " . $moveAblePoint . "<br/>";
$moveAblePoint->move();
echo "Đi lần 5: " . $moveAblePoint . "<br/>";