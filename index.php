<?php
include("session.php");
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
    <section class="header">
    <?php  
   include ('meniu.php');
?>
    <div class="text-box">
        <h1>Săpunuri din ingediente naturale</h1>
        <p>La noi vei găsi săpunuri făcute cu drag și grijă pentru tine și pielea ta</p>
        <a href="contact.php" class="hero-btn">Contactează-ne pentru mai multe detalii</a>
    </div>  
    </section>
    
    
     <!---------Products-------->
     <section class="blog">
        <h1>Our products</h1>
        
    <div class="row">
        <div class="blog-col">
            <img src="images/cranber_vanilla.jpg">
            <div class="layer">
                <h4>Cranberry dance with vanilla </h4>
            </div>
        </div>
        
        <div class="blog-col">
            <img src="images/almond_soap.jpg">
            <div class="layer">
                <h4>Almonds all the way</h4>
            </div>
        </div>
        
        <div class="blog-col">
            <img src="images/orange_soap.jpg">
            <div class="layer">
                <h4>Orange Dream</h4>
            </div>
        </div>
    
    </div>
        
    
    </section>
    
     <!-----shop------>
    <section class="shop">
         <h1>Aromia Blog</h1>
         
         <div class="row">
                <div class="shop-col">
                    <h3>Liquid Soap</h3>
                    <p>Crafted to be fair, wholesome, and good for all, our bar soaps cleanse your body and restore your hope in community. Carefully crafted in small batches, let our nourishing soap uplift your body and mind.</p>
                </div> 
                 <div class="shop-col">
                    <h3>Solid Soap</h3>
                     <p>Designed to bring joy to the everyday moments, squeaky clean hands never felt so pampered. Even hard-working hands can be sensitive sorts so our hand wash has been specially formulated to pamper and protect all skin types. 
                    </p>
                    
                </div> 
                <div class="shop-col">
                    <h3>Ready-Made Soap Bases</h3>   
                    <p>Crafted to be fair, wholesome, and good for all, our bar soaps cleanse your body and restore your hope in community.  </p>   
                </div> 
        </div>
       
    </section>
    
    <!-----------about us-------->
    <section class="about_us">
        <h1>What our customers say</h1>
        
        <div class="row">
            <div class="about_us-col">
                <img src="images/Cristina%20lavanda-105.jpg">
                     <div>
                       <p>Aceste produse m-au ajtat sa am o piele mai fina si sanatoasa. Recomand cu incredere!</p>
                       <h3>Cristina Rodean</h3>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star-o"></i>
                     </div>
            </div>
            <div class="about_us-col">
                <img src="images/adela_user.jpg">
                     <div>
                       <p>Aceste produse m-au ajtat sa am o piele mai fina si sanatoasa. Recomand cu incredere!
                       </p>
                       <h3>Paun Adela</h3>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star-half-o"></i>
                      </div>
            </div>
        </div>
    
    </section>
    
    <section class="contact">
        <h1>Contact us for more details</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>    
    
    </section>
    
    <! --------FOOTER------->
    <section class="footer">
        <h4>About us</h4>
        <p>Some text about us</p>
        <div class="icons">
            <i class="fa fa-facebook-official"></i>
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