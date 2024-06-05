<?php  

$value1=100;
$value2=20;
$sum;
$arthmetic="}";
if($arthmetic=="+"||$arthmetic=="-" || $arthmetic=="*"||$arthmetic=="/"){
if($arthmetic=="+"){
$sum=$value1+$value2;
echo "Addition of $value1 + $value2 = $sum";
}

if($arthmetic=="-"){
$sum=$value1-$value2;
echo "Substraction of $value1 - $value2 = $sum";
}

if($arthmetic=="*"){
$sum=$value1*$value2;
echo "Multiplication of $value1 X $value2 = $sum";
}

if($arthmetic=="/"){
$sum=$value1/$value2;
echo "Division of $value1 / $value2 = $sum";
}
}
else{
echo "invalid arthmetic operator";
}

?>