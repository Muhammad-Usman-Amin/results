<?php
class Student{
    //public $subjects = ["Information Security", "Web Technologies", "Computer Architecture"];
    public $subjectMarks = ["Information Security" =>  null, "Web Technologies" => null, "Computer Architecture" => null];
    public $marks;
    public $tier;
    public $name, $rollNumber;
    public $subject;
    public $grade, $gpa, $totalMarks;
    public function __construct($name, $rollNumber, $tier)
    {
        $this->name = $name;
        $this->rollNumber = $rollNumber;
        $this->tier = $tier;
        //$this->subject = $subject;
        $this->generateMarks($this->tier);
        $this->totalMarks($this->subjectMarks);
    }
    public function generateMarks($tier){
        $Grades = ["Outstanding", "Excellent", "VeryGood", "Good", "Fair"];
        $selectedTier = mt_rand(mt_rand($tier[0], $tier[1]), $tier[2]);
        switch($selectedTier){
            case 0:
                $this->marks = mt_rand(85, 100);
                $this->subjectMarks["Information Security"] =  mt_rand(85, 100);
                usleep(90000);
                $this->subjectMarks["Web Technologies"] =  rand(85, 100);
                usleep(90000);
                $this->subjectMarks["Computer Architecture"] =  mt_rand(85, 100);
                $this->grade = $Grades[0]; break;
            case 1:
                $this->marks = mt_rand(75, 85);
                $this->subjectMarks["Information Security"] =  mt_rand(75, 85);
                usleep(90000);
                $this->subjectMarks["Web Technologies"] =  rand(75, 85); 
                usleep(90000);
                $this->subjectMarks["Computer Architecture"] =  mt_rand(75, 85); 
                $this->grade = $Grades[1]; break;
            case 2:
                $this->marks = mt_rand(65, 75);
                $this->subjectMarks["Information Security"] =  mt_rand(65, 75);
                usleep(90000);
                $this->subjectMarks["Web Technologies"] =  rand(65, 75); 
                usleep(90000);
                $this->subjectMarks["Computer Architecture"] =  mt_rand(65, 75); 
                $this->grade = $Grades[2]; break;
            case 3:
                $this->marks = mt_rand(50, 65);
                $this->subjectMarks["Information Security"] =  mt_rand(50, 65);
                usleep(90000);
                $this->subjectMarks["Web Technologies"] =  rand(50, 65); 
                usleep(90000);
                $this->subjectMarks["Computer Architecture"] =  mt_rand(50, 65); 
                $this->grade = $Grades[3]; break;
            case 4:
                $this->marks = mt_rand(10, 50);
                $this->subjectMarks["Information Security"] =  mt_rand(10, 50);
                usleep(90000);
                $this->subjectMarks["Web Technologies"] =  rand(10, 50); 
                usleep(90000);
                $this->subjectMarks["Computer Architecture"] =  mt_rand(10, 50); 
                $this->grade = $Grades[4]; break;
            case -1:
                $this->marks = "<i>null<i>";
                $this->subjectMarks["Information Security"] =  "<i>null<i>";
                $this->subjectMarks["Web Technologies"] =  "<i>null<i>";
                $this->subjectMarks["Computer Architecture"] =  "<i>null<i>"; 
                $this->grade = "<i>null<i>";
                $this->gpa = -1; break;
        }
        if($this->gpa != -1){
            if ($this->gpa = round((($this-> marks) * 4) / 85, 2) > 4)
            $this->gpa = 4.00;
            else $this->gpa = round((($this-> marks) * 4) / 85, 2);
        }
         if($this->gpa == -1){
            $this->gpa = "<i>null<i>";
         }
    }
    public function totalMarks($subMarks){
        $totalMarks=null;
        foreach($subMarks as $k => $v){
            $totalMarks += (int) $v;
        }
        $this->totalMarks = $totalMarks;
    }

}

?>