<?php
    include("session.php");

    if(isset($_GET['id'])){
        $user_id= $_GET['id'];
        $sql= $db->prepare("DELETE FROM aromiausers Where id=?");
        $sql->bind_param('i', $user_id);

        if($sql->execute()){
            header('location: users_admin.php?deleted_successfully=Product has been deleted successfully');
        }else{
            header('location: users_admin.php?deleted_failure=Could not delete the product');

        }

        
    }
?>