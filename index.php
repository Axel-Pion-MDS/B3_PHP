<?php
namespace exercises;

//use exercises\Robot;
use Clock;

use DndCharacter;
use Matrix;

require 'exercises/hello-world.php';
require 'exercises/reverse.php';
//require 'exercises/Robot.php';
require 'exercises/creditCard.php';
require 'exercises/Clock.php';
require 'exercises/School.php';
//require 'exercises/Matrix.php';
require 'exercises/DndCharacter.php';

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

//$clock = new Clock(6, 15);
//echo ($clock->__toString() . "\n");
//$clock = $clock->add(-160);
//echo ($clock->__toString() . "\n");



//$school = new School();
//echo ($school->grade(2));
//$school->add('Claire', 2);
//$school->add('Rémi', 2);
//$school->add('David', 2);
//$school->add('Axel', 5);
//$school->add('Marc', 3);
//$school->add('Marie', 6);
//$school->studentsByGradeAlphabetical();
//
//echo '<pre>' . var_export($school->studentsByGradeAlphabetical(), true) . '</pre>';

//$test = "1 2\n3 4";
//$test2 = "1 2 3\n4 5 6\n7 8 9";
//$matrix1 = new Matrix($test);
//$row = $matrix1->getRow(2);
//echo '<pre>' . var_export($row, true) . '</pre>';
//$matrix2 = new Matrix($test2);
//$column= $matrix2->getColumn(3);
//echo '<pre>' . var_export($column, true) . '</pre>';

$test = new DndCharacter();
var_dump($test->generate());
echo ($test->getConstitutionModifier());
echo ($test->getHitpoint());
