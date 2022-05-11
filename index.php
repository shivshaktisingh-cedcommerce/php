<?php


echo "<br>";

$original = array("1","2","3","4","5");
foreach($original as $x){
  echo " $x";
}

echo "<br>";
$a="$";
array_splice($original , 3,0 ,$a);
foreach($original as $x){
  echo " $x";
}

echo "<br>";

$recordedtemp = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum=array_sum($recordedtemp);
$count = count($recordedtemp);
$average = $sum/$count;
echo "Average Temperature is: $average";
echo "<br>";
sort($recordedtemp);
echo "<br>";
echo "List of Seven Highest Temperature is: ";
print_r(array_slice($recordedtemp, $count-7,$count));
echo "<br>";
echo "List of Seven Lowest Temperature is: ";
print_r(array_slice($recordedtemp, 0, 7));
echo "<br>";



$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age['Peter'];


?>