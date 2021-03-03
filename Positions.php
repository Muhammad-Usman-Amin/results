<?php
class Positions
{
    public static $studentMarks = [];
    public static function calculatePostions(&$Marks)
    {
        $total = count($Marks);
        for($i = 0; $i < $total; $i++)
        {
            for($j = 0; $j < $total - $i - 1; $j++)
            {
                if($Marks[$j] < $Marks[$j+1])
                {
                    $temp = $Marks[$j + 1];
                    $Marks[$j + 1] = $Marks[$j];
                    $Marks[$j] = $temp;
                }
            }
        }
    }
} 
?>