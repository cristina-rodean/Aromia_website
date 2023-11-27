<?php
    include("session.php");      
    
?> 
<?php

    if(isset($_GET['id'])){
        $user_id=$_GET['id'];
        $sql=$db->prepare("SELECT * FROM aromiausers WHERE id=?");
        $sql->bind_param('i', $user_id);
        $sql->execute();
        $users= $sql->get_result();
    }
    elseif(isset($_POST['edit_btn'])){
        $user_id=$_POST['id'];
        $username= $_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql= $db->prepare("UPDATE aromiausers SET username=?, email=?, password=? WHERE id=?");
        $sql->bind_param('sssi',$username, $email, $password, $user_id);
        if ($sql->execute()){
            header('location: users_admin.php?edit_success_mess=Product has been updated successfully');
        }
        else{
            header('location: users_admin.php?edit_failure_mess=Error occured, try again');

        }
    }
    else{
        header('users_admin.php');
        exit;
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
       <h1>Edit User</h1>
    </section>
    
    
</body>
  <section class="edit_product">
    <div class="edit_container">
        <form id="edit-form" method="POST" action="edit_user.php" >
            <p style="color: #9E7AA1"><?php if(isset($_GET['error'])) { echo $_GET['error'];} ?></p>
           <h2>Edit</h2>

           <div class="form-group">
           <?php foreach($users as $user){?>

            <input type="hidden" name="id" value="<?php echo $user['id'];?>" />
                <label>Username</label>
                <input type="text" class="form-control" id="username" value="<?php echo $user['username']?>" name="username" placeholder="Username" required/>
           </div>
           <div class="form-group">
                <label>PEmail</label>
                <input type="text" class="form-control" id="email" value="<?php echo $user['email']?>" name="email" placeholder="Email" required/>
           </div>
           <div class="form-group">
                <label>Password</label>
                <input type="number" class="form-control" id="password" value="<?php echo $user['password']?>"name="password" placeholder="Password" required/>
           </div>

           <div class="form-group">
                <input type="submit" class="admin-btn" name="edit_btn" value="EDIT"/>
           </div>
          <?php }?>
        </form>
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