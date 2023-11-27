<?php  
   include ('session.php');
   $error = '';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

        // Check if the user is an admin
      $sql_admin = "SELECT admin_id FROM admin WHERE admin_email = '$myemail' AND admin_pass = '$mypassword'";
      $result_admin = mysqli_query($db, $sql_admin);
      $count_admin = mysqli_num_rows($result_admin);
        
      // Check if the user is a regular user
      $sql = "SELECT id FROM aromiausers WHERE email = '$myemail' and password = '$mypassword'";
     $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
      $count = mysqli_num_rows($result);
		
      if ($count_admin == 1) {
          header("location: index.php");
          $_SESSION['login_user'] = $myemail;
          $_SESSION['loggedin'] = 1;
          $_SESSION['is_admin'] = true;
         // Redirect to admin dashboard

      } elseif ($count == 1) {
        // Regular user login
        $_SESSION['login_user'] = $myemail;
        $_SESSION['loggedin'] = 1;
        header("location: index.php"); // Redirect to regular user dashboard
    } else {
        $error = "Your Login Name or Password is invalid";
    }
   }
	
	if (isset($_SESSION["loggedin"])) {
        // Redirect if already logged in
        if ($_SESSION['is_admin']) {
            header("location: shop.php");
        } else {
            header("location: index.php");
        }
    }
?>


<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Aromia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
	
</head>

<body>
    <header>
        <section class="login-header">
        <?php  
   include ('meniu.php');
?>
        </section>
    </header>
</body>

<div class="wrapper">
    
    <div class="form-box login">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" id="email" name="email" required>
                <label>Email</label>
            </div>
             <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" id="password" name= "password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="login-register">
                <p>Don't have an account?<a href="create_account.php" class="register-link">Register</a></p>
            </div>
        </form>
    </div>
    
    
</div>
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>