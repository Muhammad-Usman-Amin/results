<!--
*	Copyright (c) PlayU2U
*	https://youtube.com/PlayU2U
-->
<?php
include_once('students.php');
include_once('Positions.php');

$StudentsMarks = [
    new Student("Waqar Khan", 718, [2, 2, 3]), new Student("Abid Ali Khan", 725, [3, 3, 4]), new Student("ZIAULLAH KHAN", 778, [0, 1, 1]),
    new Student("AZAN UL HAQ", 779, [2, 3, 4]), new Student("AKBAR HUSSAIN", 780, [1, 2, 2]), new Student("SYED NADEEM NASAR", 781, [1, 2, 3]),
    new Student("OBAIDULLAH", 782, [-1, -1, -1]), new Student("IHSAN ULLAH KHAN", 783, [1, 2, 2]), new Student("MISBAH UD DIN", 784, [1, 2, 2]),
    new Student("SAPNA AAMIR", 785, [1, 2, 2]), new Student("SHAHID HUSSAIN", 786, [2, 3, 4]), new Student("DAWOOD AHMAD", 787, [2, 3, 3]),
    new Student("USMAN ALI", 788, [2, 3, 3]), new Student("HAMZA ALAM SHAH", 789, [0, 0, 0]), new Student("SAMIULLAH", 790, [2, 3, 3]),
    new Student("NAVEED HUSSAIN", 791, [2, 3, 3]), new Student("ABDULLAH", 792, [1, 2, 2]), new Student("TAUSIF KHAN", 793, [2, 3, 3]),
    new Student("YOUSUF KHAN", 794, [2, 3, 4]), new Student("NADEEM ULLAH", 795, [1, 2, 2]), new Student("ISLAM HUSSAIN", 796, [0, 0, 1]),
    new Student("BILAL KHAN", 797, [2, 3, 3]), new Student("NUMAN KHAN", 798, [2, 3, 4]), new Student("HAROON HAYAT", 799, [1, 1, 2]),
    new Student("ABDULLAH GUL", 800, [2, 3, 3]), new Student("NAVEED KHAN", 801, [1, 1, 2]), new Student("SALMAN AHMAD", 802, [1, 2, 2]),
    new Student("MUHAMMAD AYAZ KHAN", 803, [2, 3, 3]), new Student("TARIQ ULLAH", 804, [1, 1, 2]), new Student("HILAL AHMAD", 805, [2, 3, 3]),
    new Student("JUNAID AHMAD", 806, [1, 2, 2]), new Student("MUHAMMAD KASHIF KHAN", 807, [2, 3, 3]), new Student("SHER ALAM KHAN", 808, [-1, -1, -1]),
    new Student("ABDULLAH", 809, [-1, -1, -1]), new Student("ASAD ALI", 810, [1, 1, 2]), new Student("ATIF AHMAD", 811, [1, 2, 2]),
    new Student("MUHAMMAD USMAN", 812, [1, 1, 1]), new Student("SAMIULLAH", 813, [2, 2, 2]), new Student("SHAFIULLAH KHAN", 814, [2, 3, 3]),
    new Student("NOOR ZADA", 815, [2, 2, 2]), new Student("MUHAMMAD ILYAS", 816, [2, 2, 3]), new Student("EJAZ ULLAH", 816, [1, 2, 2])
];
    Positions::calculatePostions(Positions::$studentMarks);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha386-ggOyR0iXCbMQv3Xipma36MD+dH/1fQ786/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Students Marks</title>
</head>


<body>
<div style="margin: 30px; border-style: dotted;">
    <div class="container" style="margin-top: 70px;">
        <img src="UOMlogo.png" alt="University of Malakand Logo" style="float: left; width:200px; height: 170px ">
        <center>
            <h5>Department of Computer Science and IT</h5>
            <h5>University of Malakand</h5>
            <h5>7th Semester Terminal Examination Spring 2021</h5>
            <h5>BS (4-Year) in Computer Science</h5>
            <h5>Notification No: <b>Result/BCS-7th/876/1,637</b></h5>
        </center>


        <button style="float: right; margin-left:5px;" type="button" class="btn btn-warning pull-left" onclick="print()">Print</button>
        <a href="https://github.com/Muhammad-Usman-Amin/results.git" style="float: right;" class="btn btn-success pull-left">Source Code</a>
        <br>
        <hr color="gray">
        <table class="table table-hover table-bordered table-sm">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Roll Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Information Security</th>
                    <th scope="col">Web Technologies</th>
                    <th scope="col">Computer Architecture</th>
                    <th scope="col">Total Marks</th>
                    <th scope="col">GPA</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Position</th>
                </tr>
            </thead>
            <?php foreach ($StudentsMarks as $student) : ?>
                <tr <?php $pos=''; if($student->totalMarks == Positions::$studentMarks[0]) {echo 'class="table-success"'; $pos = "Ist";} 
                elseif ($student->totalMarks == Positions::$studentMarks[1]) { echo 'class="table-success"'; $pos = "2nd";}
                elseif ($student->totalMarks == Positions::$studentMarks[2]) {echo 'class="table-success"'; $pos = "3rd";}
                ?> >
                    <td scope="row"><?php echo $student->rollNumber; ?> </td>
                    <td><?php echo $student->name; ?> </td>
                    <td><?php echo $student->subjectMarks["Information Security"]; ?> </td>
                    <td><?php echo $student->subjectMarks["Web Technologies"]; ?> </td>
                    <td><?php echo $student->subjectMarks["Computer Architecture"]; ?> </td>
                    <td><?php echo $student->totalMarks; ?> /300</td>
                    <td><?php printf("%.2f", $student->gpa); ?> </td>
                    <td><?php echo $student->grade; ?> </td>
                    <td><?php echo $pos; ?> </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
        
        
        <center>
            <p font-size="3">The result is declared as a notice only. It does not in itself confer any right or privilege
                of a candidate unless a degree/Certificate is awarded in this respect. Further more errors and omissions in the result are
                subject to subsequent rectification whenever and wherever detected.
                <br>
                <font style="float: left;">
                    <b>Examination held on:    <u>17-Feb-2021</u><br>
                    Result Declared on:     <u>26-Feb-2021</u></b>
                </font>
                
                <font style="float: right;"><b>Chairman<br>
                Department of Computer Science and IT<br>
                University of Malakand</b></font>
            </p>
        </center>
    </div>
</div>
    
    <!--
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/6.3.1/js/bootstrap.min.js" 
    integrity="sha386-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf6x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha386-q8i/X+965DzO0rT7abK61JStQIAqVgRVzpbzo5smXKp6YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.7/umd/popper.min.js" integrity="sha386-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq6sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    -->
</body>

</html>