<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>built in function conversion</title>
</head>
<body>
<?php
function range_function(){
$start=1;
$end=10;
$step=1;

while($start<=$end){
    echo $start."<br>";
    $start+=$step;
}
}

function reverse_text(){
    $text="i am arslan";
    if(isset($text)){
       $result = "";
       for($i=-1; isset($text[$i]); $i--){
        $result .= $text[$i];

       }
            echo "Reversed Text: ".$result ;
       
      }
}

function counting_length(){
$string = "arslan nawaz";
$length = 0;
for ($i = 0;isset($string[$i]); $i++) {
    $length+=1;
}
echo "The length of the string is: $length";
}


function Upper_Case(){
    $string = "arslan nawaz";
$upper_string = "";
$i = 0;

while (isset($string[$i])) {
    $letter = $string[$i];
    if ($letter == 'a') {$upper_letter = 'A';}
    else if ($letter == 'b') {$upper_letter = 'B';}
    else if ($letter == 'c') {$upper_letter = 'C';}
    else if ($letter == 'd') {$upper_letter = 'D';}
    else if ($letter == 'e') {$upper_letter = 'E';}
    else if ($letter == 'f')  {$upper_letter = 'F';}
    else if ($letter == 'g')  {$upper_letter = 'G';}
    else if ($letter == 'h')  {$upper_letter = 'H';}
    else if ($letter == 'i')  {$upper_letter = 'I';}
    else if ($letter == 'j')  {$upper_letter = 'G';}
    else if ($letter == 'k')  {$upper_letter = 'K';}
    else if ($letter == 'l')  {$upper_letter = 'L';}
    else if ($letter == 'm')  {$upper_letter = 'M';}
    else if ($letter == 'n')  {$upper_letter = 'N';}
    else if ($letter == 'o')  {$upper_letter = 'O';}
    else if ($letter == 'p')  {$upper_letter = 'P';}
    else if ($letter == 'q')  {$upper_letter = 'Q';}
    else if ($letter == 'r')  {$upper_letter = 'R';}
    else if ($letter == 's')  {$upper_letter = 'S';}
    else if ($letter == 't')  {$upper_letter = 'T';}
    else if ($letter == 'u')  {$upper_letter = 'U';}
    else if ($letter == 'v')  {$upper_letter = 'V';}
    else if ($letter == 'w')  {$upper_letter = 'W';}
    else if ($letter == 'x')  {$upper_letter = 'X';}
    else if ($letter == 'y')  {$upper_letter = 'Y';}
    else if ($letter == 'z')  {$upper_letter = 'Z';}
    else $upper_letter = $letter;
    $upper_string .= $upper_letter;
    $i++;
}

echo $upper_string; 
}
?>

<h1>Str Upper function</h1>
<?php
Upper_Case();
?>
<hr>
<br>

<h1>Str length function</h1>
<?php
counting_length();
?>
<hr>
<br>

<h1>Str Reverse function</h1>
<?php
reverse_text();
?>
<hr>
<br>


<h1>Range function</h1>
<?php
range_function()
?>
<hr>
<br>
    
    
    
</body>
</html>