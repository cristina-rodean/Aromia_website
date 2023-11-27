<?php
    include("session.php");      
    
?> 
<?php

    if(isset($_GET['product_id'])){
        $product_id=$_GET['product_id'];
        $sql=$db->prepare("SELECT * FROM products WHERE product_id=?");
        $sql->bind_param('i', $product_id);
        $sql->execute();
        $products= $sql->get_result();
    }
    elseif(isset($_POST['edit_btn'])){
        $product_id=$_POST['product_id'];
        $title= $_POST['title'];
        $description=$_POST['description'];
        $price=$_POST['price'];

        $sql= $db->prepare("UPDATE products SET name=?, description=?, price=? WHERE product_id=?");
        $sql->bind_param('sssi',$title, $description, $price, $product_id);
        if ($sql->execute()){
            header('location: admin_panel.php?edit_success_mess=Product has been updated successfully');
        }
        else{
            header('location: admin_panel.php?edit_failure_mess=Error occured, try again');

        }

       
    }
    else{
        header('admin_panel.php');
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
       <h1>Edit Product</h1>
    </section>
    
    
</body>
  <section class="edit_product">
    <div class="edit_container">
        <form id="edit-form" method="POST" action="edit_product.php" >
            <p style="color: #9E7AA1"><?php if(isset($_GET['error'])) { echo $_GET['error'];} ?></p>
           <h2>Edit</h2>

           <div class="form-group">
           <?php foreach($products as $product){?>

            <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>" />
                <label>Title</label>
                <input type="text" class="form-control" id="product-name" value="<?php echo $product['name']?>" name="title" placeholder="Title" required/>
           </div>
           <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" id="product-desc" value="<?php echo $product['product_id']?>" name="description" placeholder="Description" required/>
           </div>
           <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" id="product-price" value="<?php echo $product['price']?>"name="price" placeholder="Price" required/>
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