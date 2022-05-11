<?php

class School
{
    private array $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function add(string $name, int $grade): void
    {
        $this->students[] = [
            $name,
            $grade
        ];
    }

    public function grade(int $grade): array
    {
        $result = [];

        foreach ($this->students as $student) {
            if ($student[1] === $grade) {
                $result[] = $student[0];
            }
        }

        return $result;
    }

    public function studentsByGradeAlphabetical(): array
    {
        $result = [];
        sort($this->students, SORT_REGULAR);
        foreach ($this->students as $student) {
            $result[$student[1]][] = $student[0];
        }
        ksort($result, SORT_REGULAR);

        return $result;
    }
}
