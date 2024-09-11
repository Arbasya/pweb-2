<?php
// Abstraction: Kelas abstrak Course dengan metode abstrak getCourseDetails()
abstract class Course
{
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails()
class OnlineCourse extends Course
{
    private $courseName;
    private $platform;

    public function __construct($courseName, $platform)
    {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    public function getCourseDetails()
    {
        return "Online Course: " . $this->courseName . " on " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails()
class OfflineCourse extends Course
{
    private $courseName;
    private $location;

    public function __construct($courseName, $location)
    {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    public function getCourseDetails()
    {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}
