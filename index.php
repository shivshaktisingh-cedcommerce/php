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

echo "<br>";
$day = 3;

switch ($day) {
  case 1:
    echo "Monday";
    break;
  case 2:
     echo "Tuesday";
    break;
  case 3:
     echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Thursday";
    break;
  case 6:
    echo "friday";
    break;
  case 7:
    echo "Saturday";
    break;
    default:
    echo "number greater than 7";
}


echo "<br>";
$a=1;
for($i=1;$i<5;$i++)
{
    $a=$a*$i;
}
echo $a;


echo "<br>";
$original = array("1","2","3","4","5");
$a=7;
array_splice($original , 3,0,$a);
foreach($original as $x){
    echo "$x ";
    
}