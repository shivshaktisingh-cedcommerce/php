<?php
namespace std;
session_start();
if(!isset($_SESSION['cart'])){
  $_SESSION['cart']=array();
}
$products = array (
  array("ID"=>101, "name"=>"football", "image"=>"football.png",  
  "price"=>150),
  array("ID"=>102,"name"=>"tennis", "image"=>"tennis.png",  
  "price"=>120),
  array("ID"=>103,"name"=>"basketball", "image"=>"basketball.png",  
  "price"=>90),
  array("ID"=>104,"name"=>"table-tennis", "image"=>"table-tennis.png",  
  "price"=>110),
  array("ID"=>105,"name"=>"soccer", "image"=>"soccer.png",  
  "price"=>80),
);

	class Product{
		public $name;
		public $id;
		public $price;
		function __construct($id , $name , $price){
			$this->id = $id;
			$this->name = $name;
			$this->price = $price;
		}
		function push_cart(){
			$flag=1;
			foreach($_SESSION['cart'] as $key=>$value){
				if($value[0]==$this->id){
				    $_SESSION['cart'][$key][3]++;
					$flag=0;
					break;
				}
			}
			if($flag==1){
				$_SESSION['cart'][$this->id] = array($this->id , $this->name , $this->price , 1);
			}
		}
		
	}    
	
	if(isset($_POST['cart'])){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$id = $_POST['id'];
		$obj = new Product($id , $name , $price);
		$obj->push_cart();
		show_cart();
		
	}
	if(isset($_POST['delete'])){
		unset($_SESSION['cart'][$_POST['id']]);
		show_cart();
	}
	function show_cart(){
		$txt='<tr><th>Product Id</th><th>Product Name</th><th>Product Price</th><th>Quantity</th><th>Action</th></tr>';
		foreach($_SESSION['cart'] as $key=>$value){
			$txt.='<tr>';
			$txt.='<td>'.$value[0].'</td>';
			$txt.='<td>'.$value[1].'</td>';
			$txt.='<td>'.$value[2].'</td>';
			$txt.='<td>'.$value[3].'</td>';
			$txt.='<td><button class=delete id='.$value[0].'>Remove</button></td>';
			$txt.='</tr>';
		}
    echo $txt;
	}

	
	 
?>