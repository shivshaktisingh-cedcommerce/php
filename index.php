
<?php
$products = array(
  "Electronics" => array(
    "Television" => array(
      array(
      "id" => "PR001",
      "name" => "MAX-001",
      "brand" => "Samsung"
      ),
      array(
      "id" => "PR002",
      "name" => "BIG-301",
      "brand" => "Bravia"
      ),
      array(
      "id" => "PR003",
      "name" => "APL-02",
      "brand" => "Apple"
      )
    ),
    "Mobile" => array(
      array(
      "id" => "PR004",
      "name" => "GT-1980",
      "brand" => "Samsung"
      ),
      array(
      "id" => "PR005",
      "name" => "IG-5467",
      "brand" => "Motorola"
      ),
      array(
      "id" => "PR006",
      "name" => "IP-8930",
      "brand" => "Apple"
      )
    )
  ),
  "Jewelry" => array(
    "Earrings" => array(
      array(
      "id" => "PR007",
      "name" => "ER-001",
      "brand" => "Chopard"
      ),
      array(
      "id" => "PR008",
      "name" => "ER-002",
      "brand" => "Mikimoto"
      ),
      array(
      "id" => "PR009",
      "name" => "ER-003",
      "brand" => "Bvlgari"
      )
    ),
    "Necklaces" => array(
      array(
      "id" => "PR010",
      "name" => "NK-001",
      "brand" => "Piaget"
      ),
      array(
      "id" => "PR011",
      "name" => "NK-002",
      "brand" => "Graff"
      ),
      array(
      "id" => "PR012",
      "name" => "NK-003",
      "brand" => "Tiffany"
      )
    )
  )
      );


echo "<table width=50% height=50% border=black><tr><td>Category</td><td>subCategory</td><td>ID</td><td>Name</td><td>Brand</td></tr>";
foreach($products as $i => $values)//electronic,jwelry
  {  
    
   
      {
      foreach($values as $subkey => $subvalue)
        {
         
        
         foreach($subvalue as $key => $subsubvalue)
         {
         echo("<tr>");
         echo "<td>$i</td>";
         echo "<td>$subkey</td>";
       
         
           foreach($subsubvalue as $keyin => $subsubsubvalue)
           {
            echo("<td>$subsubsubvalue</td>");
           }
           echo "</tr>";
        }
      }
        
  }             
           
   

   
 }
