<?php

$amount=52080;

$five_thousands=$amount/5000;
settype($five_thousands,"integer");

echo "5000: $five_thousands <br>";
$amount=$amount%5000;

$thousands=$amount/1000;
settype($thousands,"integer");
echo "1000: $thousands <br>";
$amount=$amount%1000;


$five_hundreds=$amount/500;
settype($five_hundreds,"integer");
echo "500: $five_hundreds <br>";
$amount=$amount%500;

$hundreds=$amount/100;
settype($hundreds,"integer");
echo "100: $hundreds <br>";
$amount=$amount%100;

$fifty=$amount/50;
settype($fifty,"integer");
echo "50: $fifty <br>";
$amount=$amount%50;

$twenty=$amount/20;
settype($twenty,"integer");
echo "20: $twenty <br>";
$amount=$amount%20;

$ten=$amount/10;
settype($ten,"integer");
echo "10: $ten <br>";


?>