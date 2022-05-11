<?php

class Clock
{
    private DateTime $time;


    public function __construct(?int $hour = 0, ?int $min = 0)
    {
        date_default_timezone_set('Europe/Paris');
        $this->time = (new DateTime())->setTime($hour, $min)->setDate(0, 0, 0);
    }

    public function add(int $minute): Clock
    {
        $this->time->modify("$minute minutes");

        return $this;
    }

    public function sub(int $minute): Clock
    {
        $this->time->modify("-$minute minutes");

        return $this;
    }

    public function __toString(): string
    {
        return $this->time->format('H:i');
    }
}
