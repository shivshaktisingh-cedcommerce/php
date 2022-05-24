<?php include "config.php";
	session_start(); ?>
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
	<?php include "header.php";?>
	<div id="main">
		<div id="products">
			<?php foreach($products as $value){ ?>
				<div id="product-101" class="product">
					<img src="<?php echo $value['image'];?>">
					<h3 class="title"><a href="#"><?php echo $value['name'];?></a></h3>
					<span><?php echo $value['price'];?></span>
					<a class="add-to-cart" id="<?php echo $value['ID'];?>" name="<?php echo $value['name'];?>" price="<?php echo $value['price'];?>" href="">Add To Cart</a>
				</div>
			<?php } ?>
		</div>
	</div>
	
		<table id="myTable">

		</table>
		<input type="hidden" value="Empty your Cart" id="empty">
	
	<?php include "footer.php";?>
	<script>
		$(document).ready(function(){
			$('.add-to-cart').click(function(){
				event.preventDefault();
				$("#empty").attr("type","button");
				$name = $(this).attr('name');
				$price = $(this).attr('price');
				$id = $(this).attr('id');
				$.ajax({
					method : 'POST',
					url : 'config.php',
					data :{
						cart : 'cart',
						id : $id,
						name : $name,
						price : $price
						
					},
					success : function(data){
						$('#myTable').html(data);
					}
				});
				
			});
			$('#myTable').on("click",".delete",function(){
				$id = $(this).attr('id');
				$.ajax({
					method : 'POST',
					url : 'config.php',
					data :{
						delete : 'cart',
						id : $id,
					},
					success : function(data){
						$('#myTable').html(data);
					}
				})
			});

			$("#empty").click(function(){
				$.ajax({
                type: 'POST',
                url: 'Logout.php',
                success: function(msg) {
                if (msg == 'loggedOut') {
                   window.location.href = 'products.php';
                  }
                }
            });
			});
		});
	</script>
</body>
</html>