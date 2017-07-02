<?php
require_once "tasks/task1.php";
require_once "tasks/task2.php";
require_once "tasks/task3.php";
require_once "tasks/task4.php";
require_once "tasks/task5.php";

echo "Task 1<br/>";
echo chess(3, 3, '*');
echo "<br/>";

echo "Task 2<br/>";
$l1 = new Letter(10, 10);
$l2 = new Letter(15, 15);
echo letter($l1, $l2);
echo "<br/>";

echo "<br/>Task 3<br/>";
$abc = new Triangle('abc', 10, 20, 22.36);
$qwe = new Triangle('qwe', 5, 9.3, 6.66);
$rty = new Triangle('rty', 66, 33, 47);
$arr = [$abc, $qwe, $rty];
echo implode("<br/>", geron($arr));
echo "<br/>";

echo "<br/>Task 4<br/>";
$c1 = new ContextT4(4400, 5500);
print_r(equalizeMethods($c1));
echo "<br/>";

echo "<br/>Task 5<br/>";
$c2 = new ContextT5(1, 50);
echo implode("<br/>", counter($c2));

?>