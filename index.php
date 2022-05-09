<?php
namespace exercises;

use exercises\Robot;

require 'exercises/hello-world.php';
require 'exercises/reverse.php';
require 'exercises/Robot.php';

echo(helloWorld() . "\n");
echo(reverse("Hello, World!") . "\n");

$name = new Robot();
echo $name->getName() . "\n";
$newName = $name->reset();
echo $newName;
