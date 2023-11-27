<?php  
   include ('session.php');
   $error = '';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM aromiausers WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
        $error = "Your Login Name or Password is invalid";
      } 
      else {
        $_SESSION['login_user'] = $myemail;
        $_SESSION['loggedin'] = 1;
        $querr = "INSERT INTO aromiausers (username, email, password) VALUES ('$username','$myemail','$mypassword')";
        mysqli_query($db, $querr);

        }
   }
	
	if(isset($_SESSION["loggedin"])){
		header("location: index.php");
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
        <h2>Registration</h2>
        <form action="" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <input type="text" name="username" id="username" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" id="email" name="email" required>
                <label>Email</label>
            </div>
             <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" id="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms & conditions</label>
               
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="login-register">
                <p>Already have an account?<a href="register_file.php" class="login-link">Login</a></p>
            </div>
        </form>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>