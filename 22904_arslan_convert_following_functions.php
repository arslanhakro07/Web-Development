<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions Assignment</title>
</head>
<body>  
    <?php

    function sorting(){
        echo "sorted array = 3,5,8,21,1,8,5";
    
        $sort = array(3, 5, 8, 21, 1, 8, 5); 
    
        for ($i = 0; $i < 7; $i++) {
            for ($j = $i; $j < 7; $j++) {
                if ($sort[$i] > $sort[$j]) {
                    $value = $sort[$i];
                    $sort[$i] = $sort[$j];
                    $sort[$j] = $value;
                }
            }
        }
        echo "<pre>";
        print_r($sort);
        echo "</pre>";
    }  
    
    

    function Marksheet(){
    

        $pakstudy=90;
        $english=80;
        $biology=50;
        $maths=90;
        $programming=45;
        $total_Marks=500;
        $obtained_Marks=null;
        $percentage=null;
        $grade=null;
        
        
        
        $obtained_Marks=$pakstudy+$english+$maths+$biology+$programming;
        
        
        echo "pakstudy = $pakstudy <br> english = $english <br> maths = $maths<br> biology = $biology <br> programming = $programming<br>";
        
        echo "Obtained Marks = $obtained_Marks<br>";
        echo "Total Marks = $total_Marks<br>";
        
        $percentage=$obtained_Marks/500*100;
        
        echo "Percentage = $percentage <br>";
        
        
        switch(true){
        case ($biology<40 || $programming <40|| $english<40||$pakstudy<40||$maths<40):
        echo $grade="Grade fail";
        break;
        
        case ($percentage<40): 
        echo $grade="Grade fail";
        break;
        
        case ($percentage>80 && $percentage<=100): echo $grade="Grade A";
        break;
        case ($percentage>60&& $percentage<80): echo $grade="Grade B";
        break;
        case ($percentage>50&& $percentage<60): echo $grade="Grade C";
        break;
        case ($percentage>40&& $percentage<50): echo $grade="Grade D";
        break;
        case ($percentage<40): echo "$grade=fail";
        break;
        }
        }


function calculator(){
$value1=90;
$value2=70;
$sum=0;
$arthmetic="*";
switch($arthmetic=="+"||$arthmetic=="-" || $arthmetic=="*"||$arthmetic=="/"){

case $arthmetic=="+": $sum=$value1 + $value2;
echo "$value1 + $value2 = $sum";
break;

case $arthmetic=="-":$sum=$value1-$value2;
echo "$value1 - $value2 = $sum";
break;

case $arthmetic=="*":$sum=$value1*$value2;
echo "$value1 * $value2 = $sum";
break;

case $arthmetic=="/" :$sum=$value1/$value2;
echo "$value1 / $value2 = $sum";
break;

default: echo"invalid operator";
}


        }
    ?>

<h1>Sorting function</h1>
<?php
sorting();
?>
<hr>
<br>
   

<h1>calculator function</h1>
<?php
calculator();
?>
<hr>
<br>
   

<h1>Marksheet function</h1>
<?php
Marksheet();
?>
<hr>
<br>
    
</body>
</html>