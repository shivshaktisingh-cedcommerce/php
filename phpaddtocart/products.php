<?php
session_start();



if(!isset($_SESSION['cart']))
$_SESSION['cart']=array();
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
        if(isset($_POST['submit']))
        {
            session_destroy();
        }

        if ( isset( $_GET['action'] ) && $_GET['action']=='add-to-cart'){
         $id = $_GET['id'] ;
         $name = $_GET['name'];
         $price = $_GET['price'];
         $item=array("ID"=>$id,"Name"=>$name,"Price"=>$price);
         array_push($_SESSION['cart'],$item);
        }

      
         ?>
         
         <div id="cart1">
        <table>
            <tr>
                <td>Product Id</td>
                <td>Product Name</td>
                <td>Product Price</td>
               
            </tr>
        <?php foreach($_SESSION['cart'] as $key=>$value){ ?>
            <tr>
                <td><?php echo $value['ID'] ?></td>
                <td><?php echo $value['Name'] ?></td>
                <td><?php echo $value['Price'] ?></td>
               
            </tr>
            <?php } ?>
       </table>
       <form method="POST" action="">
       <input type="submit" name ="submit" id="empty" value="Empty cart">
        </form> 
       </div>
        
      
      
       </div>

    </div>
    <?php include 'footer.php';?> 
        
        </body>
</html>

