<?php
namespace exercises;

//use exercises\Robot;
//use exercises\Clock;

use Matrix;

require 'exercises/hello-world.php';
require 'exercises/reverse.php';
//require 'exercises/Robot.php';
require 'exercises/creditCard.php';
//require 'exercises/Clock.php';
//require 'exercises/School.php';
require 'exercises/Matrix.php';

//echo(helloWorld() . "\n");
//echo(reverse("Hello, World!") . "\n");

// $robot1 = new Robot();
// echo ($robot1->getName() . "\n");
// $robot2 = new Robot("AC130");
// echo ($robot2->getName() . "\n");
// $robot3 = new Robot("AC130");
// echo ($robot3->getName() . "\n");

// var_dump($GLOBALS['robots']);

// echo(maskify("1234-5678-9012") . "\n");
// echo(maskify("123456789012") . "\n");
// echo(maskify("1234-ABCD-9012") . "\n");
// echo(maskify("") . "\n");

//echo '<pre>' . var_export($table, true) . '</pre>';

//$clock1 = new Clock();
//echo ($clock1 . "\n");
//$clock2 = new Clock();
//echo ($clock2 . "\n");
//$clock3 = new Clock('12:30:00');
//echo ($clock3 . "\n");
//$clock3->add(10);
//echo ($clock3 . "\n");
//$clock3 = new Clock('10:08:59');
//echo ($clock3 . "\n");

//$students[] = [
//    [
//        'name' => 'Anna',
//        'grade' => 1
//    ],
//    [
//        'name' => 'Barb',
//        'grade' => 1
//    ],
//    [
//        'name' => 'Charlie',
//        'grade' => 1
//    ],
//    [
//        'name' => 'Alex',
//        'grade' => 2
//    ],
//    [
//        'name' => 'Peter',
//        'grade' => 2
//    ],
//    [
//        'name' => 'Zoe',
//        'grade' => 2
//    ],
//    [
//        'name' => 'Jim',
//        'grade' => 5
//    ],
//];
//
//$school = new School($students);
//echo ($school->grade(2));
//
//echo '<pre>' . var_export($school->studentsByGradeAlphabetical(), true) . '</pre>';

$test = "1 2\n3 4";
$test2 = "1 2 3\n4 5 6\n7 8 9";
$matrix1 = new Matrix($test);
$row = $matrix1->getRow(2);
echo '<pre>' . var_export($row, true) . '</pre>';
$matrix2 = new Matrix($test2);
$column= $matrix2->getColumn(3);
echo '<pre>' . var_export($column, true) . '</pre>';

