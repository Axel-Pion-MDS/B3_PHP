<?php

namespace exercises;

class Robot {
    private string $name;
    private array $robots;

    public function __construct(?string $name = null) {
        if (!isset($GLOBALS['robots'])) {
            global $robots;
            $robots = [];
        }

        $this->robots = $GLOBALS['robots'];
        if (!$name || $this->checkNames($name)) {
            $this->reset();
        } else {
            $this->name = $name;
            $this->robots[] = $this->name;
            $GLOBALS['robots'][] = $this->name;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function reset(): void
    {
        $start = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 2)), 0, 2);
        $end = substr(str_shuffle(str_repeat("0123456789", 3)), 0, 3);
        $this->name = "$start$end";

        if ($this->checkNames($this->name)) {
            $this->reset();
        } else {
            $this->robots[] = $this->name;
            $GLOBALS['robots'][] = $this->name;
        }
    }

    public function checkNames(string $name): bool
    {
        return in_array($name, $this->robots);
    }
}
