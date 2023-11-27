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
       <h1>Aromia Blog</h1>
    </section>
    
    
    <! --------blog page------->
    <section>
        <div class="row">
            <div class="blog-left">
                <img src="images/blog2.jpg">
                <h2>Blog Posts</h2>
                <p>Natural soaps start with natural ingredients. Organic soaps use organic natural ingredients. Organic soaps normally consist of blended butter and oils derived from various plants. This substance is rich in vitamins, nutrients, and antioxidants. Human skin, hair and other parts of the body need these substances to grow, live and/or remain healthy. Many natural soaps have other beneficial ingredients added as well, such as clays, salts, essential oils and botanical extracts. Handmade soaps take longer to produce, and usually use higher quality ingredients, hence the added cost, but they do tend to be easier on sensitive skin.It is important to try a variety or natural soaps to find the one that is ideal to your skin type and preferences.</p>
                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    <form class="comment-form">
                        <input type="text" placeholder="Enter Name">
                        <input type="email" placeholder="Enter Email">
                        <textarea rows="5" placeholder="Write your comment"></textarea>
                        <button type="submit" class="hero-btn red-btn">Post Comment</button>
                    </form>
                </div>
                
            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Epic Orange Cold Process Soap</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Beautiful Earth: Making Cold Process Clay Soap</span>
                    <span>28</span>
                </div>
                <div>
                    <span>Making “Aurora Borealis” Handmade Soap!</span>
                    <span>15</span>
                </div>
                <div>
                    <span>Incorporating Resins in Cold Process Soap!</span>
                    <span>5</span>
                </div>
                <div>
                    <span>Liquid soap with sparkles</span>
                    <span>9</span>
                </div>
                <div>
                    <span>Christmas Recipies</span>
                    <span>12</span>
                </div>
            </div>
        </div>
    </section> 
    </body>
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