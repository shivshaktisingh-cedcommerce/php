<html>
  <head>
</head>
<body>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">

<?php

echo "<br>";
echo "<br>";
for($a=1;$a<=8;$a++)
{
  echo "<tr>";
  for($b=1;$b<=8;$b++)
  {  $Total=$a+$b;
    if($Total%2==0)
    {
    echo"<td width=30px height=30px bgcolor=#FFFFFF </td>";
    }
    else
    {
      echo"<td width=30px height=30px bgcolor=#000000 </td>";
    }
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>