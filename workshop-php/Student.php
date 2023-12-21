<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:40 PM
 */

/**
 * Class Student
 */
class Student
{
    public string $name;
    public string $studentNumber;

    // TODO Generate getters and setters for both arguments (((DONE)))
    // TODO Generate constructor with both arguments (((DONE)))

    // Constructor with both arguments
    public function __construct(string $name, string $studentNumber)
    {
        $this->name = $name;
        $this->studentNumber = $studentNumber;
    }

    // Getter for name
    public function getName(): string
    {
        return $this->name;
    }

    // Setter for name
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Getter for studentNumber
    public function getStudentNumber(): string
    {
        return $this->studentNumber;
    }

    // Setter for studentNumber
    public function setStudentNumber(string $studentNumber): void
    {
        $this->studentNumber = $studentNumber;
    }
}