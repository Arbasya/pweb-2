<?php
class Student extends Person
{
    private $name; // Encapsulation: private attribute
    private $studentID;

    public function __construct($name, $studentID)
    {
        $this->name = $name;
        $this->studentID = $studentID;
    }

    // Setter untuk name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter untuk name
    public function getName()
    {
        return "Student Name: " . $this->name;
    }

    // Setter untuk studentID
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    // Getter untuk studentID
    public function getStudentID()
    {
        return $this->studentID;
    }
}
