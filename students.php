<?php
class Student{
    public $subjects = ["Information Security", "Web Technologies", "Computer Architecture"];
    public $marks;
    public $tier;
    public $name;
    public $rollNumber;
    public $subject;
    public $grade, $gpa;
    public function __construct($name, $rollNumber, $tier, $subject)
    {
        $this->name = $name;
        $this->rollNumber = $rollNumber;
        $this->tier = $tier;
        $this->subject = $subject;
        $this->generateMarks($this->tier);
    }
    public function generateMarks($tier){
        $Grades = ["Outstanding", "Excellent", "VeryGood", "Good", "Fair"];
        $selectedTier = mt_rand(mt_rand($tier[0], $tier[1]), $tier[2]);
        switch($selectedTier){
            case 0:
                $this->marks = mt_rand(85, 100); 
                $this->grade = $Grades[0]; break;
            case 1:
                $this->marks = mt_rand(75, 85); 
                $this->grade = $Grades[1]; break;
            case 2:
                $this->marks = mt_rand(65, 75); 
                $this->grade = $Grades[2]; break;
                case 3:
                $this->marks = mt_rand(50, 65); 
                $this->grade = $Grades[3]; break;
            case 4:
                $this->marks = mt_rand(10, 50); 
                $this->grade = $Grades[4]; break;
        }
        if ($this->gpa = round((($this-> marks) * 4) / 85, 2) > 4)
        $this->gpa = 4.00;
        else $this->gpa = round((($this-> marks) * 4) / 85, 2);
    }

}

?>