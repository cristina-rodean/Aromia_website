<?php
    include("session.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") { 

        $idp = $_POST['product_id'];
        $id=$_POST['user_id'];
        $sql5 = mysqli_query($db, "DELETE FROM shop_cart WHERE product_id='" . $idp . "' and user_id='" . $id . "'" ) ;
        header("location: cart.php");
    }
?>