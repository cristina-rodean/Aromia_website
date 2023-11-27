<?php
    include("session.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $id=$_POST['user_id'];
        $result_final=mysqli_query($db, "INSERT INTO orders (cod_user, cod_produs, cantitate) SELECT user_id, product_id, cantitate FROM shop_cart WHERE user_id='" . $id . "'");
        $result_delete=mysqli_query($db, "DELETE FROM shop_cart WHERE user_id='" . $id . "'");
        header("location: cart.php");
        
    }
?>