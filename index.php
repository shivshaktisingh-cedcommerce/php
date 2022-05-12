 <!DOCTYPE html>
<html>
<head>
  <style>
    #outer{
      width:100%;
      height:100%;
     
    }

   
    </style>
  <title>Document</title>
</head>
<body>
  <?php
  
  if(isset($_POST['img_submit']))
  { 
    echo "j";
   $img_name = $_FILES['img_upload']['name'];
   $tmp_img_name = $_FILES['img_upload']['tmp_name'];
   $folder='upload/';
   echo $folder.$img_name;
   move_uploaded_file($tmp_img_name,$folder.$img_name);
   //$folder='upload/';
  
  }


  ?>

  <div id="outer">
    <div id="inner">
  <form method="post" action ="" enctype="multipart/form-data">
    <input type="file" name ="img_upload">
    <input type="submit" name ="img_submit">
</form> 
 
  
  
</div>
</div>
    
  
</body>
</html>