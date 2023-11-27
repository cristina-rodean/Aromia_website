<?php
    include("session.php");      
    
    if(isset($_POST['add_product'])){
        $product_id=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_image=$_FILES['product_image']['name'];
        $product_image_tmp_name=$_FILES['product_image']['tmp_name'];
        $product_image_folder='images/'.$product_image;

        if(empty($product_name) || empty($product_price) || empty($product_image)){
            $message[]='please fill out all';
        }else{
            $insert ="INSERT INTO products (product_id,name, price, url_img) VALUES ('$product_id','$product_name', '$product_price', '$product_image_folder')";
            $upload= mysqli_query($db, $insert);
            if($upload){
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                $message[]='new prodduct added successfully';
                header('location: admin_panel.php');
            }else{
                $message[]='could not add the product';
                header('location: admin_panel.php');
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
                <h3>Add a new product</h3>
                <input type="number" placeholder="enter product id" name="product_id" class="box">
                <input type="text" placeholder="enter product name" name="product_name" class="box">
                <input type="number" placeholder="enter product price" name="product_price" class="box">
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="submit" class="admin-btn" name="add_product" value="Add Product">
            </form>
        </div>
    </div>

</html>