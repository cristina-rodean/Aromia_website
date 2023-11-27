<?php
    include("session.php");      
    
    if (isset($_POST['update_images'])){
        $product_name= $_POST['product_name'];
        $product_id= $_POST['product_id'];

        $image1=$_FILES['image1']['tmp_name'];
        // $image2=$_FILES['image2']['tmp_name'];
        // $image3=$_FILES['image3']['tmp_name'];
        // $image4=$_FILES['image4']['tmp_name'];
        // $image5=$_FILES['image5']['tmp_name'];
        // $image6=$_FILES['image6']['tmp_name'];

        $image_name1=$product_name."1.jpg";
        // $image_name2=$product_name."2.jpeg";
        // $image_name3=$product_name."3.jpeg";
        // $image_name4=$product_name."4.jpeg";
        // $image_name5=$product_name."5.jpeg";
        // $image_name6=$product_name."6.jpeg";

        move_uploaded_file($image1, "/aromia/images/".$image_name1);
        // move_uploaded_file($image2, "/aromia/images/".$image_name2);
        // move_uploaded_file($image3, "/aromia/images/".$image_name3);
        // move_uploaded_file($image4, "/aromia/images/".$image_name4);
        // move_uploaded_file($image5, "/aromia/images/".$image_name5);

        $sql= $db->prepare("UPDATE products SET url_img=? WHERE product_id=?");
        $sql->bind_param('si', $image_name1,$product_id);

        if($sql->execute()){
            header('location: admin_panel.php?images_updated=Images have been updated successfully');

        }else{
            header('location: admin_panel.php?images_failed=Error occured');
        }
    }
?>