<?php
    include("session.php");      
    
    function getBYID($table, $id){
        $sql="SELECT * FROM $table WHERE id='$id'";
        return $sql_run=mysqli_query($db, $sql);
    }
?> 
<?php
    if(isset($_GET['product_id'])){
        $product_id=$_GET['product_id'];
        $product_name=$_GET['product_name'];
        
    }
    else{
        header('location: admin_panel.php');
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
       <h1>Edit Images</h1>
    </section>
    
    
</body>
 <div class="edit-img">
    
    <h2>Update Product Images</h2>
    <div class="table-responsive">
        <div class="mx-auto container">
            <form id="edit-image-form" enctype="multipart/form-data" method="POST" action="update_images.php">
                <p style="color: #9E7AA1"><?php if(isset($_GET['error'])) { echo $_GET['error'];} ?>
           </p>
                <input type="hidden" name="product_id" value="<?php echo $product_id;?>"/>
                <input type="hidden" name="product_name" value="<?php echo $product_name;?>"/>
                
                <div class="form-group mt-2">
                    <label>Image 1</label>
                    <input type="file" class="form-control" id="image1" placeholder="Image 1" required/>
                </div>

                
                <div class="form-group mt-3">
                    <input type="submit" class="admin-btn" name="update_images" value="Update"/>
                </div>
            </form>
        </div>
    </div>
</div>
</html>
















