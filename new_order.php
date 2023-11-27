<?php
    include("session.php");      
    
    if(isset($_POST['add_order'])){
        $order_id=$_POST['order_id'];
        $cod_user=$_POST['cod_user'];
        $cod_produs=$_POST['cod_produs'];
        $cantitate=$_POST['cantitate'];
        if(empty($cod_user) || empty($cod_produs) || empty($cantitate)){
            $message[]='please fill out all';
        }else{
            $insert ="INSERT INTO orders (order_id,cod_user, cod_produs, cantitate) VALUES ('$order_id','$cod_user', '$cod_produs', '$cantitate')"; 
            $sql=mysqli_query($db, $insert);
            if($sql){
                
                $message[]='new order added successfully';
                header('location: orders_admin.php');
            }else{
                $message[]='could not add the order';
                header('location: orders_admin.php');
            }
        }
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
       <h1>Admin Panel</h1>
    </section>
    
</body>
    <div class="container">
        <div class="admin_product_form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <h3>Add a new order</h3>
                <input type="number" placeholder="enter order id" name="order_id" class="box">
                <input type="text" placeholder="enter user id" name="cod_user" class="box">
                <input type="number" placeholder="enter product id" name="cod_produs" class="box">
                <input type="number" placeholder="enter product quantity" name="cantitate" class="box">
                <input type="submit" class="admin-btn" name="add_order" value="Add Order">
            </form>
        </div>
    </div>

</html>