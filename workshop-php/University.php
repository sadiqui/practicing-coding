<?php
require_once "AbstractUniversity.php";

/**
 * Class University
 */
class University extends AbstractUniversity
{
    // TODO Implement all the methods declared in parent (((DONE)))
    // addSubject, addStudentOnSubject, getStudentsForSubject, getNumberOfStudents, print.

    public function addSubject(string $code, string $name): Subject
    {
        $subject = new Subject();
        $subject->setCode($code);
        $subject->setName($name);
        $this->subjects[] = $subject;
        return $subject;
    }

    public function addStudentOnSubject(string $subjectCode, Student $student)
    {
        foreach ($this->subjects as $subject) {
            if ($subject->getCode() === $subjectCode) {
                $subject->addStudent($student->getName(), $student->getStudentNumber());
                break;
            }
        }
    }

    public function getStudentsForSubject(string $subjectCode)
    {
        foreach ($this->subjects as $subject) {
            if ($subject->getCode() === $subjectCode) {
                return $subject->getStudents();
            }
        }

        return null;
    }

    public function getNumberOfStudents(): int
    {
        $totalStudents = 0;
        foreach ($this->subjects as $subject) {
            $totalStudents += count($subject->getStudents());
        }
        return $totalStudents;
    }

    public function print()
    {
        foreach ($this->subjects as $subject) {
            echo $subject->getName() . str_repeat("-", 25) . PHP_EOL;
            foreach ($subject->getStudents() as $student) {
                echo $student->getName() . " - " . $student->getStudentNumber() . PHP_EOL;
            }
        }
    }
}