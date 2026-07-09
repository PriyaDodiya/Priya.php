<?php
$stud=[5,6,1,2,4,7,8,9,10];
print_r($stud);
echo"<br>";
echo"<br>";


/*sort($stud);
echo"<br>";
echo"<br>";
asort($stud);
print_r($stud);*/


echo"<br>";
echo"<br>";

/*rsort($stud);
print_r($stud);
echo"<br>";
echo"<br>";*/

arsort($stud);
print_r($stud);
echo"<br>";
echo"<br>";

$uni=array("atmiya","rajkot","bscit");
print_r($uni);
echo"<br>";
echo"<br>";

echo current($uni);
echo"<br>";

echo next($uni);
echo"<br>";


echo end($uni);
echo"<br>";


echo prev($uni);
echo"<br>";
echo"<br>";
echo"<br>";

$t=array_merge($stud,$uni);
print_r($t);
echo"<br>";
echo"<br>";

$a=[11,22,33,44,55];
print_r($a);
echo"<br>";
echo"<br>";
echo array_shift($a);
echo"<br>";
echo"<br>";
print_r($a);


echo array_unshift($a,"priya");
echo"<br>";
echo"<br>";
echo"<br>";
print_r($a);


echo array_push($a,"khushi");
echo"<br>";
echo"<br>";
echo"<br>";
print_r($a);

echo array_pop($a);
echo"<br>";
echo"<br>";
echo"<br>";
print_r($a);




?>