<?php
// Kelas Teacher yang mewarisi dari Person dengan tambahan atribut teacherID
class Teacher extends Person
{
    private $teacherID;

    public function __construct($name, $teacherID)
    {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override getName() untuk Teacher
    public function getName()
    {
        return "Teacher Name: " . $this->name;
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }
}

// Override getName() untuk Student
class Student extends Person
{
    private $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override getName() untuk menampilkan format berbeda
    public function getName()
    {
        return "Student Name: " . $this->name;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }
}
