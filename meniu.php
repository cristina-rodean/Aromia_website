<?php
	
    if(!isset($_SESSION["loggedin"])) {
	  echo 
		' 
            <nav>
                <a href="index.php"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                  <i class="fa fa-times-circle" onclick="hideMenu()"></i>
                   <ul>
                    <li><a href="index.php">Home</a></li>
                       <li><a href="shop.php">Shop</a></li>
                       <li><a href="blog.php">Blog</a></li>
                       <li><a href="about.php">About us</a></li>
                       <li><a href="contact.php">Contact</a></li>
                       <a href="register_file.php">
                        <button class="btnLogin-popup">Login</button>
                       </a>            
                   </ul>
                </div> 
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
             ';
    }elseif (isset($_SESSION["loggedin"]) && !(isset($_SESSION["is_admin"]))) {
        echo '
        <nav>
                <a href="index.php"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                  <i class="fa fa-times-circle" onclick="hideMenu()"></i>
                   <ul>
                    <li><a href="index.php">Home</a></li>
                       <li><a href="shop.php">Shop</a></li>
                       <li><a href="blog.php">Blog</a></li>
                       <li><a href="about.php">About us</a></li>
                       <li><a href="contact.php">Contact</a></li>
                       <li><a href="account_info.php">Profile</a></li>
                       <a href="logout.php">
                        <button class="btnLogin-popup">Logout</button>
                       </a>
                       <a href="cart.php">
                        <img src="images/cart.png" id="imgCart">
                       </a>               
                   </ul>
                </div> 
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            
        ';
    } 
    elseif( $_SESSION["is_admin"] == true ){
        echo 
		' 
        <nav>
        <a href="index.php"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times-circle" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="admin_handle.php">Admin Panel</a></li>
                <a href="logout.php">
                    <button class="btnLogin-popup">Logout</button>
                </a>
                <a href="cart.php">
                    <img src="images/cart.png" id="imgCart">
                </a>               
            </ul>
        </div> 
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
             ';
    }
?>