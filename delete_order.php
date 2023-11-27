<?php
    include("session.php");

    if(isset($_GET['order_id'])){
        $order_id= $_GET['order_id'];
        $sql= $db->prepare("DELETE FROM orders Where order_id=?");
        $sql->bind_param('i', $order_id);

        if($sql->execute()){
            header('location: orders_admin.php?deleted_successfully=Product has been deleted successfully');
        }else{
            header('location: orders_admin.php?deleted_failure=Could not delete the product');

        }

        
    }
?>