<?php
    include("session.php");      
    
?> 
<?php

    if(isset($_GET['order_id'])){
        $order_id=$_GET['order_id'];
        $sql=$db->prepare("SELECT * FROM orders WHERE order_id=?");
        $sql->bind_param('i', $order_id);
        $sql->execute();
        $orders= $sql->get_result();
    }
    elseif(isset($_POST['edit_btn'])){
        $order_id=$_POST['order_id'];
        $cod_user= $_POST['cod_user'];
        $cod_produs=$_POST['cod_produs'];
        $cantitate=$_POST['cantitate'];

        $sql= $db->prepare("UPDATE orders SET cod_user=?, cod_produs=?, cantitate=? WHERE order_id=?");
        $sql->bind_param('sssi',$cod_user, $cod_produs, $cantitate, $order_id);
        if ($sql->execute()){
            header('location: orders_admin.php?edit_success_mess=Product has been updated successfully');
        }
        else{
            header('location: orders_admin.php?edit_failure_mess=Error occured, try again');

        }
    }
    else{
        header('orders_admin.php');
        exit;
    }
?>

<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0"/>
	<title>Aromia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
	
</head>
<body>
    <section class="sub-header">
    <?php  
        include ('meniu.php');
    ?>
       <h1>Edit Order</h1>
    </section>
    
    
</body>
  <section class="edit_product">
    <div class="edit_container">
        <form id="edit-form" method="POST" action="edit_order.php" >
            <p style="color: #9E7AA1"><?php if(isset($_GET['error'])) { echo $_GET['error'];} ?></p>
           <h2>Edit</h2>

           <div class="form-group">
           <?php foreach($orders as $order){?>

            <input type="hidden" name="order_id" value="<?php echo $order['order_id'];?>" />
                <label>User Code</label>
                <input type="text" class="form-control" id="user_code" value="<?php echo $order['cod_user']?>" name="cod_user" placeholder="User Code" required/>
           </div>
           <div class="form-group">
                <label>Product Code</label>
                <input type="text" class="form-control" id="product-code" value="<?php echo $order['cod_produs']?>" name="cod_produs" placeholder="Product ID" required/>
           </div>
           <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" id="cantitate" value="<?php echo $order['cantitate']?>"name="cantitate" placeholder="Quantity" required/>
           </div>

           <div class="form-group">
                <input type="submit" class="admin-btn" name="edit_btn" value="EDIT"/>
           </div>
          <?php }?>
        </form>
      </div>  
    </section>
    
    <! --------FOOTER------->
    <section class="footer">
        <h4>About us</h4>
        <p>Some text about us</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
             <i class="fa fa-instagram"></i>
             <i class="fa fa-email"></i>
        
        </div>
    
    </section>
    
    
    
</html>