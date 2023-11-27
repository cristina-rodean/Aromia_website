<?php
    include("session.php");

    if(isset($_GET['product_id'])){
        $product_id= $_GET['product_id'];
        $sql= $db->prepare("DELETE FROM products Where product_id=?");
        $sql->bind_param('i', $product_id);

        if($sql->execute()){
            header('location: admin_panel.php?deleted_successfully=Product has been deleted successfully');
        }else{
            header('location: admin_panel.php?deleted_failure=Could not delete the product');

        }

        
    }
?>