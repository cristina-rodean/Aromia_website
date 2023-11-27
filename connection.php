<?php
    include("session.php");
    $email= $_SESSION['login_user'];
    $result=mysqli_query($db, "SELECT * FROM aromiausers WHERE email='" . $email . "'");
    $row = mysqli_fetch_array($result);

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
       <h1>Account information</h1>
    </section>
    
    
</body>

    <!-----cart items details------>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
            <form action="" method="POST">
                <!-- <?php
                    $currentUser=$_SESSION['username'];
                    $sql="SELECT * FROM aromiausers WHERE username='$currentUser'";
                    $gotresults=mysqli_query($db, $sql);

                    if($gotresults){
                        if(mysqli_num_rows($gotresults)>0){
                            while($row=mysqli_fetch_array($gotresults))
                            print_r($row['username']);
                        }
                    }
                ?> -->
                <div class="form-group">
                    <span>
                        <h5>My Username:</h5>
                        <p><?php echo $row["username"]; ?></p>
                        <button class="cart-btn"name="update" type="submit" >Change username</button>
                        <input type="text" name="updateUsername" class="form-control" value="">
                    </span>
                </div>
                <div  class="form-group">
                    <span>
                        <h5>My Email:</h5>
                        <p><?php echo $row["email"]; ?></p>
                        <button class="cart-btn"name="update" type="submit">Change email address</button>
                        <input type="email" name="userEmail" class="form-control" value="">
                    </span>
                </div>
               </form>
                <!-- <div>         
                     <span>
                        <h5>Password</h5>
                        <a href="" class="change_item">Change password</a>
                    </span>
                </div> -->
            </div>
    
        <table>
            <tr>
                <th>My Orders</th>
            </tr>
            <tr>
                <td>
                    <div  class="cart-info">
                        <img src="images/almond_soap.jpg">
                        <div>
                            <p class="cart-product-title">Chamomile Soap</p>
                            <small class="cart-price">50.00 RON</small>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        </div>
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