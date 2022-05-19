<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	
</head>
<body>
	<?php include "header.php"; ?>
	<?php include "config.php";?>
	<div id="main">
		<div id="products">
			<?php 
			
			foreach($products as $key=>$value)
		    {?>
			<div id="product-<?php echo $value['ID'] ?>" class="product">
				<img src="<?php echo $value['image'] ?>">
				<h3 class="title"><a href="#">Product <?php echo $value['ID'] ?></a></h3>
				<span id="<?php echo $value['price'] ?>"><?php echo "Price: $".$value['price'] ?></span>
				<a class="add-to-cart" href="" quantity="<?php echo 1; ?>" id="<?php echo $value['ID'] ?>" price="<?php echo $value['price'] ?>"name="<?php echo $value['name'] ?>" >Add To Cart </a>
				

			</div>
			<?php } ?>
			
		</div>
		<div id="myTable">
			</div>
		
			<div id="button to delete" style="background-color:none; display:flex;
        justify-content: center;">
         	<form method="POST" action=""> 
	         <input type ="hidden" name="submit"id="empty1" value="Empty cart">
			</form> 
		</div> 

	</div>
	
	<?php include "footer.php"; ?>

<script>

	$(document).ready(function(){
		$(".add-to-cart").click(function () {
			event.preventDefault();
            $("#empty1").attr("type", "submit");
			
			var product_id=$(this).attr("id");
			var product_name=$(this).attr("name");
			var product_price=$(this).attr("price");
		
			$.ajax({
				dataType:"HTML",
			    method:"POST",
                url:"store_items.php",
                data:{
					product_id:product_id,
                    product_name:product_name,
                    product_price:product_price
			    	},
                    success:function(data,status) {
                    }
					});
				  show_cart();
				 
				  
				  function show_cart()
		          { 
					$.ajax({
				    datatype:"HTML",
     		     	method:'POST',
	     	     	url:'store_items.php',
		    	    data:{
				    showcart:"cart"
			        },
		    	    success:function(data,status){
				    $('#myTable').html(data);
		        	}
			        });
				  } 
				 
				  $("#myTable").on("click","#Delete",function(){   
				   $(this).parent().parent().remove();
				}); 
				

                
            });
			
			
			
	
		});
	



    

	</script>	
		
</body>
</html>