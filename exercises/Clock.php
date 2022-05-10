<?php

use DateInterval;
use Datetime;
use Exception;

class Clock
{
    private DateTime $time;

    /**
     * @throws Exception
     */
    public function __construct(?string $time = null)
    {
      date_default_timezone_set('Europe/Paris');
      $this->time = new Datetime($time ?? 'now');
    }

    public function getTime(): DateTime
    {
      return $this->time;
    }

    /**
     * @throws Exception
     */
    public function add(int $minute): void
    {
      $this->time->add(new DateInterval('PT' . $minute . 'M'));
    }


    /**
     * @throws Exception
     */
    public function substract(int $minute): void
    {
      $this->time->sub(new DateInterval('PT' . $minute . 'M'));
    }

    public function __toString(): string
    {
      return $this->time->format('H:i');
    }
}
