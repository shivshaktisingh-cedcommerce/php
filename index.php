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
  margin: 28px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left:80px;
}
#convert{
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left:80px;
}
#result{
  margin-top:10%;
  margin-left:20%;
}
input[type=radio]{
  margin-left:20%;
}


   
    </style>
  <title>Document</title>
</head>
<body>
  <?php
  
  if(isset($_POST['htm']))
  { 
   $operation = $_POST['htm'];
   $numtoconvert = $_POST['insert'];
   if(!empty($numtoconvert))
   {
     if($operation == 'htm'){ 
       $a= "hours";
       $b= "minutes";
       $result = $numtoconvert * 60;
      }
      else{
        $a="hours";
        $b="seconds";
        $result = $numtoconvert * 60 * 60;
      }
    
     
   }
  }


  ?>

  <div id="outer">
    <div id="inner">
  <form method="post" action ="">
 
  <input type="number" id="typetoconvert" name="insert">
  <br>
  <br>
  <input type="radio" id="htm" name="htm" value="htm">
  <label for="htm">hour to mins</label><br><br>
  <input type="radio" id="mts" name="htm" value="mts">
  <label for="mts">minutes to second</label>
  <div id="result">
    <?php
     echo "$numtoconvert  $a = $result   $b"; 
    ?>
    </div>
    <br>
    <br>
 
  <input type="submit"  id="convert" name="convert" value="Convert">
  <br>
  <br>
  
  
  <br>
  <br>
  
</div>
</div>
    
  
</body>
</html>