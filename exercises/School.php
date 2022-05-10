<?php

namespace exercises;

class School
{
    private array $students;

    public function __construct(?array $student = null)
    {
        $this->students = $student[0];
    }

    public function add(string $name, int $grade): void
    {
        $this->students[] = [
            'name' => $name,
            'grade' => $grade
        ];
        var_dump($this->students);
    }

    public function grade(int $grade): string
    {
        $result = [];
        foreach ($this->students as $student) {
            if ($student['grade'] === $grade) {
                $result[] = $student['name'];
            }
        }

        if (count($result) === 1) {
            $list = implode($result);

            return "Which students are in grade $grade ?\nWe've only got $list just now.";
        }

        if (count($result) === 0) {
            return "Which students are in grade $grade ?\nWe've got nobody just now.";
        }

        $list = implode(', ', $result);

        return "Which students are in grade $grade ?\nWe've got $list just now.";
    }

    public function studentsByGradeAlphabetical(): array
    {
        ksort($this->students, SORT_REGULAR);
        foreach ($this->students as $student) {
            asort($student, SORT_REGULAR);
        }
        return $this->students;
    }
}
