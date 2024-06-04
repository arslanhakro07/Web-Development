<?php

$x=10;
echo "before setting the settype<br>";
echo gettype($x);

echo"<br>After setting the set type<br>";
settype($x,"double");
echo gettype($x);


 ?>