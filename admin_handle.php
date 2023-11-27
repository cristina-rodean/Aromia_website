<?php
    include("session.php");
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

<div class="handle_title">
    <h2>Choose what you want to modify</h2>
</div>
<section class="contact">
        <a href="admin_panel.php" class="hero-btn">Products</a>    
        <a href="orders_admin.php" class="hero-btn">Orders</a>    
        <a href="users_admin.php" class="hero-btn">Users</a>    
</section>
</html>