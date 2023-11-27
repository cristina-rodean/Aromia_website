<?php
    include("session.php");      
    
    if(isset($_POST['add_user'])){
        $user_id=$_POST['id'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($username) || empty($email) || empty($password)){
            $message[]='please fill out all';
        }else{
            $insert ="INSERT INTO aromiausers (id, username , email, password) VALUES ('$user_id','$username', '$email', '$password')"; 
            $sql=mysqli_query($db, $insert);
            if($sql){
                
                $message[]='new user added successfully';
                header('location: users_admin.php');
            }else{
                $message[]='could not add the user';
                header('location: users_admin.php');
            }
        }
    }
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
    <div class="container">
        <div class="admin_product_form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <h3>Add a new user</h3>
                <input type="number" placeholder="enter user id" name="user_id" class="box">
                <input type="text" placeholder="enter username" name="username" class="box">
                <input type="text" placeholder="enter user email" name="email" class="box">
                <input type="text" placeholder="enter user password" name="password" class="box">
                <input type="submit" class="admin-btn" name="add_user" value="Add User">
            </form>
        </div>
    </div>

</html>