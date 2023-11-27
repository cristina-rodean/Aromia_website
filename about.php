<?php
include("session.php");
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
       <h1>About us</h1>
    </section>
  </body>  
    
    <! --------content------->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
               
                <h1>We are a small business</h1>
                 <div class="about-col">
                    <img src="images/about_us.jpg">
               </div>
                <p>Some text about the business and what it is meant to offer<br>
                Handmade soap is usually made by a process called cold process soap making. It involves mixing lye (sodium hydroxide) with water, then slowly adding oils (such as olive oil, and coconut oil) while stirring. The mixture is then poured into a mold and left to cure for several weeks. During the curing process, the lye reacts with the fats and oils to create soap and glycerin. After curing, the soap</p>
                <a href="shop.php" class="hero-btn red-btn">EXPLORE NOW</a>
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