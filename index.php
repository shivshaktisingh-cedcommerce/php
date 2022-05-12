<!DOCTYPE html>
<html>
<head>
  <style>
    #outer{
      width:100%;
      height:100%;
      
    }
    #inner{
      width:30%;
      height:20%;
      margin:auto;
      margin-top:10%;
      background-color:powderblue;
      padding:20px;
      
    }
    #add {
        margin-left:70px;
    }
    .same {
       width:14%;
       margin-top:10px;
    }
    #result{
      margin-left:8%;
    }
    </style>
  <title>Document</title>
</head>
<body>
  <?php
   $result="";
   $firstnum=$_POST['number1'];
   $secondnum=$_POST['number2'];
   $operator=$_POST['operator'];
   if(!empty($firstnum) && !empty($secondnum))
   {
     switch ($operator)
     {
       case '+':
        $result = $firstnum + $secondnum;
        break;
       case '-':
          $result = $firstnum - $secondnum;
          break;
       case '*':
          $result = $firstnum * $secondnum;
          break;
       case '/':
          $result = $firstnum / $secondnum;
          break;
     }
     
   }
  


  ?>

  <div id="outer">
    <div id="inner">
  <form method="post" action ="">
  <label for="fnum">Number 1:</label>
  <input type="number" id="number1" name="number1" placeholder="Enter first number here">
  <br>
  <br>
  <label for="snum">Number 2:</label>
  <input type="number"  id="number2" name="number2" placeholder="Enter second number here">
  <br>
  <br>
  <label for="result">Result:</label>
  <input readonly="readonly" name="result" id="result" value="<?php echo $result; ?>"> 
  <input type="submit" class="same" name="operator" id="add" value="+">
  <input type="submit" class="same" name="operator" id="subtract" value="-">
  <input type="submit" class="same" name="operator" id="divide" value="/">
  <input type="submit" class="same" name="operator" id="multiply" value="*">
  <br>
  <br>
  
</div>
</div>
    
  
</body>
</html>