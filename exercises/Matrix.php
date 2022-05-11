<?php

class Matrix {
    private string $matrix;

    public function __construct(?string $matrix = null)
    {
        $this->matrix = $matrix;
    }

    public function getColumn(): array
    {
        $column = [];
        $explode = explode(PHP_EOL, $this->matrix);
        foreach ($explode as $matrix) {
            $exp = explode(" ", $matrix);
            foreach ($exp as $cKey => $item) {
                $column[$cKey][] = $item ;
            }
        }

        return $column;
    }

    public function getRow(): array
    {
        $row = [];
        $explode = explode(PHP_EOL, $this->matrix);
        foreach ($explode as $matrix) {
            $exp = explode (" ", $matrix);
            foreach ($exp as $rKey => $item) {
                $row[$rKey][] = $item;
            }
        }

        return $row;
    }
}
