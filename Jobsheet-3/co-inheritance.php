<?php
// Kelas Person dengan atribut name dan metode getName()
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Kelas Student mewarisi dari Person dengan tambahan atribut studentID
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}
