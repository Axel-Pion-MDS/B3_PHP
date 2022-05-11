<?php

class Matrix {
    private string $matrix;

    public function __construct(?string $matrix = null)
    {
        $this->matrix = $matrix;
    }

    public function getColumn(int $choice): array
    {
        if (strlen($this->matrix) === 1) {
            return [$this->matrix];
        }
        $column = [];
        $explode = explode(PHP_EOL, $this->matrix);
        foreach ($explode as $key => $matrix) {
            $exp = explode(" ", $matrix);
            foreach ($exp as $cKey => $item) {
                $column[$cKey][] = $item ;
            }
        }



        return $column[$choice - 1];
    }

    public function getRow(int $choice): array
    {
        if (strlen($this->matrix) === 1) {
            return [$this->matrix];
        }
        $row = [];
        $explode = explode(PHP_EOL, $this->matrix);
        foreach ($explode as $key => $matrix) {
            $exp = explode(" ", $matrix);
            foreach ($exp as $item) {
                $row[$key][] = $item;
            }
        }

        return $row[$choice - 1];
    }
}
