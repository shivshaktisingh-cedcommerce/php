<?php
for($a=5;$a<16;$a++)
{
    echo $a;
    echo "<br>";
}

$a=5;
$b=6;
$z=$a+$b;
echo "<br>";
echo $z;


$a= "World";
echo "<br>";
echo "Welcome to the php $a";
echo "<br>";
$str1="Hello world!";
$str2="Good morning !";
echo $str1 . " " . $str2;


echo"<br>";
$a=45;
if($a>=60)
echo "First Division";
else if($a>=45 && $a<=59)
echo "Second Division";
else if($a>=33 && $a<=44)
echo "third division";
else
echo "fail";