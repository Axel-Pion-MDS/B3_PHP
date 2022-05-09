<?php
namespace exercises;

use exercises\Robot;

require 'exercises/hello-world.php';
require 'exercises/reverse.php';
require 'exercises/Robot.php';

$names = ['RC123', 'AB987', 'TG456'];

//echo(helloWorld() . "\n");
//echo(reverse("Hello, World!") . "\n");

$robot1 = new Robot();
echo ($robot1->getName() . "\n");
$robot2 = new Robot("AC130");
echo ($robot2->getName() . "\n");
$robot3 = new Robot("AC130");
echo ($robot3->getName() . "\n");

var_dump($GLOBALS['robots']);
