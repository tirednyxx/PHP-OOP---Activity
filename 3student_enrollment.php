<?php
class Student {
    private $StudentName;
    private $courses = [];
    private $courseFee = 1450;

    public function __construct($StudentName) {
        $this->StudentName = $StudentName;
    }

    public function addCourse($courseName) {
        $this->courses[] = $courseName;
    }

    public function deleteCourse($courseName) {
        $index = array_search($courseName, $this->courses);
        if ($index !== false) {
            unset($this->courses[$index]);
        }
    }

    public function getEnrolmentFee() {
        return count($this->courses) * $this->courseFee;
    }

    public function displayEnrollment() {
        echo "Student: {$this->StudentName}\n";
        echo "Courses: " . implode(", ", $this->courses) . "\n";
        echo "Total Fee: ₱" . $this->getEnrolmentFee() . "\n";
    }
}

$student = new Student("Nikka Marquez");
$student->addCourse("Software Engineering");
$student->addCourse("Professional Elective");
$student->addCourse("Data Analysis");
$student->deleteCourse("Software Engineering");
$student->displayEnrollment();
?>
