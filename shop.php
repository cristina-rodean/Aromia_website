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
       <h1>Shop</h1>
    </section>
</body> 
    
    <! --------shop------->
       <section class="shop">
         <h1>Buy your favourite products</h1>
         <div class="small-container">
            <div class="row row-2">
                <h2>All products</h2>
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by price asc</option>
                    <option>Sort by price desc</option>
                    <option>Sort by sale</option>
                </select>
                 
            </div>
        </div>
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
            <div class="row">
                <div class="col-4">
                  <a href="proDet5.php">
                    <img src="images/coconut.jpg">
                  </a>
                    <h4>Coconut Milk Soap</h4>
                    <p>75.00 RON</p>
                </div>
                <div class="col-4">
                    <a href="proDet6.php">
                        <img src="images/lavender.jpg">
                    </a>
                    <h4>Lavender Soap</h4>
                    <p>60.00 RON</p>
                </div>
                <div class="col-4">
                    <a href="proDet7.php">
                        <img src="images/coffee.jpg">
                    </a>
                    <h4>Coffee Seeds Soap</h4>
                    <p>60.00 RON</p>
                </div>
                <div class="col-4">
                    <a href="proDet8.php">
                        <img src="images/black_soap.jpg">
                    </a>
                    <h4>Black Soap</h4>
                    <p>95.00 RON</p>
                </div>
            </div>
            </div>
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
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