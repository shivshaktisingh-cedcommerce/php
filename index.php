<!DOCTYPE html>
<html>
<head>
  <style>
    #outer{
      width:100%;
      height:100%;
      
    }
    #inner{
      width:50%;
      height:40%;
      margin:auto;
      margin-top:10%;
      background-color:powderblue;
      padding:20px;
      
    }
    input[type=number]{
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#width{
  margin-left:1%;
}
#calculate{
  width:40%;
  margin-left:30%;
  padding: 12px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#result{
  margin-top:5%;
}

   
    </style>
  <title>Document</title>
</head>
<body>
  <?php
  $area = "";
  $perimeter = "";
  if(isset($_POST['calculate']))
  {
   $length = $_POST['length'];
   $width = $_POST['width'];
   
   if(!empty($length) && !empty($width))
   {
     $area = $length * $width;
     $perimeter = 2 * ($length + $width); 
     
   }
  }


  ?>

  <div id="outer">
    <div id="inner">
  <form method="post" action ="">
  <span>Length of Rectangle</span>
  <input type="number" id="length" name="length" placeholder="Enter length here">
  <br>
  
  <br>
  <span>Width of Rectangle</span>
  <input type="number"  id="width" name="width" placeholder="Enter width here">
  <br>
  <br>
  <input type="submit"  name="calculate" id="calculate" value="Calculate Area and Perimeter">
  
  <div id="result">
    <?php
    echo "Area is ".$area. "sq. mtr.";
    echo "<br>";
    echo "<br>";
    echo "Perimeter is ".$perimeter. "sq. mtr.";
    ?>
    </div>
 
  <br>
  <br>
  
</div>
</div>
    
  
</body>
</html>