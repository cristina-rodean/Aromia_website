<?php  
   include ('session.php');
   
   $error = '';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	    $email = $_SESSION['login_user'];
      $sql = "SELECT id FROM aromiausers WHERE email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $sql3="SELECT * FROM shop_cart WHERE user_id=" . $row["id"] . " AND product_id=8 ";
      
      $result3 = mysqli_query($db,$sql3);
      $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
	  
      $count = mysqli_num_rows($result3);
		
      if($count == 1) {
        $cantitate=$_POST["cantitate"];
        $sql2="UPDATE shop_cart set cantitate=cantitate+" . $cantitate . " WHERE user_id=" . $row['id'] . " AND product_id=8";
        $result2=mysqli_query($db,$sql2);
        header("location: cart.php");}
      else{
      $cantitate=$_POST["cantitate"];
	    $sql2="INSERT INTO shop_cart (user_id, product_id, cantitate) values (" . $row['id'] . ",8," . $cantitate . ")";
      $result2=mysqli_query($db,$sql2);
      header("location: cart.php");
    }
   }
?>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0"/>
	<title>Aromia</title>
    <link rel="stylesheet" href="style.css">
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
       <h1>Shop</h1>
    </section>
    
    
    <! --------product details------->
    <div class= "small-container single-product" >
        <div class="row">
            <div class="col-2">
                <img src="images/black_soap.jpg" width="100%" class="product-img">>
            </div>
            <div class="col-2">
                <form action="" method="POST">
                <h1 class="product-title">Black Soap</h1>
                <h4 class="price">95.00 RON</h4>
                <input type="number" name="cantitate" value="1">
                <?php
                  if(!isset($_SESSION["loggedin"]))
                      {
                        echo '<button class="cart-btn" type="submit" disabled>Add to cart</button>';
                      }
                  else{
                    echo '<button class="cart-btn" type="submit">Add to cart</button>';
                  }
                ?>
                <h3>Product details</h3>
                <p>Homemade soaps are artisanal cleansing products crafted with care and creativity.<br> These unique  soaps are meticulously
                prepared using a variety of natural ingredients,<br> such as oils, butters,  and essential oils.</p>
                </form>
              </div>
        </div>
    </div>
    <!------title-------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View more</p>
        </div>
    </div>
    
    <!-----products------>    
    <div class="small-container">
        <div class="row">
            <div class="col-4">
              <a href="proDet1.php">
                <img src="images/almond_soap.jpg">
              </a>
                <h4>Chamomile Soap</h4>
                <p>50.00 RON</p>
            </div>
            <div class="col-4">
              <a href="proDet2.php">
                <img src="images/cranber_vanilla.jpg">
              </a>
                <h4>Cranberry Soap</h4>
                <p>70.00 RON</p>
            </div>
            <div class="col-4">
              <a href="proDet3.php">
                <img src="images/orange_soap.jpg">
              </a>
                <h4>Orange Soap</h4>
                <p>50.00 RON</p>
            </div>
            <div class="col-4">
              <a href="proDet4.php">
                <img src="images/bp_soap.jpg">
              </a>
                <h4>Black Pepper Soap</h4>
                <p>55.00 RON</p>
            </div>
        </div>
    </div>
    
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
    
    
   <! --------Javascript for toggle menu------->
    <script>
        var navLinks= document.getElementById("navLinks");
        
        function showMenu(){
            navLinks.style.right="0";
        }
        
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>
  </body>
    
</html>