<?php
  session_start();


  if(isset($_POST['product_id']))
  {
    $_SESSION['id'][] = array ( "id" => "product_id", "name" => "product_name", "price" => "product_price","quantity"=>1 );
  
  }
