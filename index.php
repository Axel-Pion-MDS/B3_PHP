<?php
namespace exercises;

use exercises\Robot;
use exercises\Clock;

require 'exercises/hello-world.php';
require 'exercises/reverse.php';
require 'exercises/Robot.php';
require 'exercises/creditCard.php';
require 'exercises/Clock.php';

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

$clock1 = new Clock();
echo ($clock1 . "\n");
$clock2 = new Clock();
echo ($clock2 . "\n");
$clock3 = new Clock('12:30:00');
echo ($clock3 . "\n");
$clock3->add(10);
echo ($clock3 . "\n");
$clock3 = new Clock('10:08:59');
echo ($clock3 . "\n");

