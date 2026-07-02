<?php 

/* simple function */
function name()
{
    echo $name="AU";
}
name();

echo"<br>";

/* Argument function*/
 
function Priya($name)
{
    echo $name;
}
Priya("Atmiya");

echo"<br>";

/*call by value*/ 

function add($num)
{
    echo $num = $num+10;
}
$x=5;
add($x);
echo $x;
echo"<br>";


/*call by refrence*/ 

function add1(&$num)
{
    echo $num = $num+10;
}
$x=5;
add1($x);
echo $x;
echo"<br>";

/* funtion with value*/

function sum ($x,$y)
{
    $z=$x+$y;
    return $z;
}
echo sum (10,20);

echo"<br>";

/* default argument*/

function sum1($x,$y,$z=5)
{
    echo$x+$y+$z;
}
sum1(1,2,3);
sum1(1,2);

echo"<br>";

/* nesting offunction */

function two()
{
    echo"this is two";
    echo("this is one");
}
two();
echo"<br>";

/* variable function*/

function krishna($name)
{
    echo $name;
}
$k="krishna";
$k("yadav");







?>