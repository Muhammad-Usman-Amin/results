<!--
*	Copyright (c) PlayU2U
*	https://youtube.com/PlayU2U
-->
<?php
include_once('students.php');

$ISMarks = [
 new Student("Hamza",772,[0,1,1] ,0), new Student("Usman", 812, [0,1,2] ,0), new Student("Zia", 770,[1,1,2] ,0),
 new Student("Samiullah", 813,[2,2,3] ,0),new Student("Tausif", 794, [2,2,3] ,0), new Student("Navid", 801, [1,2,3] ,0), 
 new Student("Atif", 811, [1,1,2] ,0),new Student("Islam", 775, [0,1,1] ,0),new Student("Shahid", 780, [2,2,3],0), 
 new Student("Numan", 806, [3,3,4], 0), new Student("Misbah", 771, [2,2,3], 0), new Student("Noor Zada", 813, [2,2,3],0)
];

$WebMarks = [new Student("Hamza",772,[0,1,1] ,1), new Student("Usman", 812, [0,1,2] ,1), new Student("Zia", 770,[1,1,2] ,1),
new Student("Samiullah", 813,[2,2,3] ,1), new Student("Tausif", 794, [2,2,3] ,1), new Student("Navid", 801, [1,2,3] ,1), 
new Student("Atif", 811, [1,1,2] ,1),new Student("Islam", 775, [0,1,1] ,1), new Student("Shahid", 780, [2,2,3],1), 
new Student("Numan", 806, [3,3,4], 1), new Student("Misbah", 771, [2,2,3], 1), new Student("Noor Zada", 813, [2,2,3],0)
];

?>

<!DOCTYPE html>
<html>
<head>
<title>Students Marks</title>
</head>
<body>

    <h1 align="center">Information Security</h1> 

    <table align="center" border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Marks</th>
            <th>GPA</th>
            <th>Grade</th>
            <th>Subject</th>
        </tr>
        <?php foreach($ISMarks as $student) :?>
        <tr>
            <td style="padding:5px"><?php echo $student->rollNumber; ?> </td>
            <td style="padding:5px"><?php echo $student->name; ?> </td>
            <td style="padding:5px"><?php echo $student->marks; ?> </td>
            <td style="padding:5px"><?php printf("%.2f", $student->gpa); ?> </td>
            <td style="padding:5px"><?php echo $student->grade ?> </td>
            <td style="padding:5px"><?php echo $student->subjects[$student->subject];?></td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>
        <br>
    <h1 align="center"> Web Technologies</h1>
    <table align="center" border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Marks</th>
            <th>GPA</th>
            <th>Grade</th>
            <th>Subject</th>
        </tr>
        <?php foreach($WebMarks as $student) :?>
        <tr>
            <td style="padding:5px"><?php echo $student->rollNumber; ?> </td>
            <td style="padding:5px"><?php echo $student->name; ?> </td>
            <td style="padding:5px"><?php echo $student->marks; ?> </td>
            <td style="padding:5px"><?php printf("%.2f", $student->gpa); ?> </td>
            <td style="padding:5px"><?php echo $student->grade ?> </td>
            <td style="padding:5px"><?php echo $student->subjects[$student->subject]; ?></td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>
</body>
</html>