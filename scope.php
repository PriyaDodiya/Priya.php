//local variable

<?php
function test()
{
	$a=10;
	echo$a;
}
test();

//global variable

$b=50;
function show()
{
	global $b;
	echo$b;
}
show();

//static variable

function counter()
{
	static $count=1;
	$count++;
	echo $count;
}
counter();
?>
