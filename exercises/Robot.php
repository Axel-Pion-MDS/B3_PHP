<?php

namespace exercises;

class Robot {
    private string $name;

    public function __construct() { }

    public function getName(): string
    {
        try {
            $start = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 2)), 0, 2);
            $end = substr(str_shuffle(str_repeat("0123456789", 3)), 0, 3);
            $this->name = "$start$end";

            return $this->name;
        } catch (\BadMethodCallException $e) {
            throw new $e("Implement the getName method");
        }
    }

    public function reset(): string
    {
        try {
            $tmp = $this->name;
            $newName = $this->getName();

            ($newName === $tmp) ? $newName = $this->getName() : $this->name = $newName;
            return $newName;
        } catch (\BadMethodCallException $e) {
            throw new $e("Implement the reset method");
        }
    }
}
