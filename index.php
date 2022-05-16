<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
    <?php
    if(isset($_POST['sessionDestroy']))
    {
        session_destroy();
    }
    if(isset($_POST['img_submit']))
    {
        $img_name=$_FILES['img_upload']['name'];
        
        $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $folder ='upload/';     
        if(move_uploaded_file($tmp_img_name,$folder.$img_name))
        {
            
            $_SESSION['img1'][]=$img_name;
        }
    
  
    ?>
    <div class="div" style="display:flex;justify-content:center">

       <?php if(isset($_SESSION['img1'])){for($i=0;$i<count($_SESSION['img1']);$i++){?>
        <div>
            <img src="upload/<?php echo $_SESSION['img1'][$i]?>" style="height:300px;width:300px" alt="">
            <p><?php echo $_SESSION['img1'][$i]?></p>
       </div>
       <?php } }?>
        </div>
    <?php
    }
    ?>
      <input type="file" name="img_upload"><br><br>
      <input type="submit" name="img_submit">   
      <input type="submit" name="sessionDestroy"> 
</form>
<?php

?>
<?php

  ?>  
</body>
</html>

