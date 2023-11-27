<?php  

   $sql=$db->prepare("SELECT * FROM products");
   $sql->execute();

   $featured_products=$sql->get_result();
  
?>