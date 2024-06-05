<?php
echo "MARKSHEET<br><br>";
$algorithms=39;
$english=60;
$calculus=70;
$maths=80;
$cp=65;
$total_Marks=500;
$obtained_Marks;
$percentage;
$grade;

$obtained_Marks=$algorithms+$english+$maths+$calculus+$cp;

echo "algorithms = $algorithms <br> english = $english <br> maths = $maths<br> calculus = $calculus <br> cp = $cp<br>";

echo "Obtained Marks = $obtained_Marks<br>";

$percentage=$obtained_Marks/500*100;


echo "Percentage = $percentage <br>";

if($percentage>80){
$grade="Grade A";
}
if($percentage>60 && $percentage<80){
$grade="Grade B";
}

if($percentage>50 && $percentage<60){
$grade="Grade C";
}

if($percentage>40&& $percentage<50){
$grade="Grade D";
}

if($percentage<40){
echo "you are fail <br>";
}

if($algorithms<40 || $calculus <40|| $calculus<40||$cp<40||$maths<40){
$grade="you are fail";

}

else{
}
echo $grade;

echo "<br>Total Marks = $total_Marks <br>";







?>