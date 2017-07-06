<?php
require_once "tasks/task1.php";
require_once "tasks/task2.php";
require_once "tasks/task3.php";
require_once "tasks/task4.php";
require_once "tasks/task5.php";

echo "Task 1<br/>";
$c = new Chessboard(8, 8, "*");
$chess = new generateChessboard($c);
$chess->resolveAsString();
echo "<br/>";

echo "Task 2<br/>";
$l1 = new Letter(15, 15);
$l2 = new Letter(10, 10);
$cl = new MatchEnvelopes($l1, $l2);
$cl->resolveAsString();
echo "<br/>";

echo "<br/>Task 3<br/>";
$abc = new Triangle('abc', 10, 20, 22.36);
$qwe = new Triangle('qwe', 5, 9.3, 6.66);
$rty = new Triangle('rty', 66, 33, 47);
$triangleArray = new TriangleSort($abc, $qwe, $rty);
$triangleArray->resolveAsString();
echo "<br/>";

echo "<br/>Task 4<br/>";
$c1 = new ContextT4(4400, 5500);
$rt4 = new ResultT4($c1);
$rt4->resolveAsString();
echo "<br/>";

echo "<br/>Task 5<br/>";
$c2 = new ContextT5(1, 50);
$rt5 = new ResultT5($c2);
$rt5->resolveAsString();
?>