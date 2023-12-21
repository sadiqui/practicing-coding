<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:16 PM
 */

/**
 * Class Subject
 */
class Subject
{
    public $code;
    public $name;
    /**
     * @var Student[]
     */
    public $students = [] ;

    // TODO Generate getters and setters (((DONE)))
    // TODO Generate constructor for all attributes. $students argument of the constructor can be empty (((DONE)))

    // Constructor for all attributes
    public function __construct($code = null, $name = null, $students = [])
    {
        $this->code = $code;
        $this->name = $name;
        $this->students = $students;
    }

    // Getter for code
    public function getCode()
    {
        return $this->code;
    }

    // Setter for code
    public function setCode($code)
    {
        $this->code = $code;
    }

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Setter for name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter for students
    public function getStudents()
    {
        return $this->students;
    }

    // Setter for students
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */
    public function addStudent(string $name, string $studentNumber): Student
    {
        // TODO Implement method according to method annotation (((DONE)))
        $student = new Student();
        $student->setName($name);
        $student->setStudentNumber($studentNumber);
        $this->students[] = $student;
        return $student;
    }
}