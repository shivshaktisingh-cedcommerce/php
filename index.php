<html>
  <head>
  
      
  </head>
  <body>

  <?php
  if(isset($_POST['unit_submit']))
  {
    $units = $_POST['units'];
    if(!empty($units)){
      $result = calculate_bill($units);
    }
  }
  function calculate_bill($units)
  {
    if($units<50)
    {
      $bill=3.50 * $units;
    }
    else if($units>50 && $units<150)
    {
       $temp=50 * 3.50; 
       $bill= $temp + (4 * ($units-50));
    }
    else if($units>150 && $units<250)
    { 
       $temp=(50 * 3.50) + (100 *4);
       $bill= $temp + (5.20 * ($units -150));
    }
    else if($units>250)
    {
       $temp=(50 * 3.50) + (100 * 4) + (100 * 5.20);
       $bill = $temp + (($units-250)*6.50);;
    }
    return $bill;
  }
  ?>
  <div id="outer" style>
    <div id="bill">
    <form method="post" action="">
      <input type="number" name="units" id="units" placeholder="Enter Unit Here">
      <input type="submit" name="unit_submit" id="unit-submit" value="submit">
    </form>
    </div>
    <div id="result">
      <?php
      echo "your electricity bill is $result";
      ?>
</div>

</div>
  <style>
    #outer {
      width:100%;
      height:100%;
      background-color:lightgray;
      float:left;
    }
    #bill {
      margin-top:100px;
      margin-left:200px;
      
    }
    #result {
      margin-top:10px;
      margin-left:200px;
    }
  </style>
  </body>
</html>
