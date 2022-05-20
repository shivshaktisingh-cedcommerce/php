<?php
session_start();
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
}
 ?>



<!DOCTYPE html>
<html>
<head>
    <title>
        Products
    </title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
<?php include 'config.php';?>
    <div id="main">
        <div id="products">
            <?php
            $counter=100;
            foreach($products as $i => $values)
            { 
                $counter++;
                ?>
               <div id="product-101" class="product">
                <img src="<?php echo $values['image']?>">
                <h3 class="title"><a href="#">Product <?php echo $counter?></a></h3>
                <span><?php echo "Price: $" .$values['price'] ?> </span>
                <a class="add-to-cart" href="products.php?action=add-to-cart&id=<?php echo $counter; ?>&name=<?php echo $values['name']; ?>&price=<?php echo $values['price']; ?>">Add To Cart</a>
            </div>
            <?php }?>
            
        </div>
        <?php
        
       if(isset($_GET['action']) && $_GET['action']=='add-to-cart')
       {  
       // $_SESSION['cart']=array(); 
         $id = $_GET['id'] ;
         $name = $_GET['name'];
         $price = $_GET['price'];
         $item=array("ID"=>$id,"Name"=>$name,"Price"=>$price);
         array_push($_SESSION['cart'],$item);
         $txt="<table><tr><td>PRODUCT ID</td><td>PRODUCT NAME</td><td>PRODUCT PRICE</td></tr>";
         foreach($_SESSION['cart'] as $key => $value)
         {
         $txt.="<td>".$value['ID']."</td>";
         $txt.="<td>".$value['Name']."</td>";
         $txt.="<td>".$value['Price']."</td>";
         $txt.="</tr>";
         }
        $txt.="</table>";
        echo $txt;
       }
        ?>
     
       <form method="POST" action="">
       <a href="logout.php" name="submit1" id="empty"> Empty</a> 
        </form> 
       </div>
     

      
       </div>
   
  
    </div>
    <?php include 'footer.php';?> 
        
        </body>
</html>

