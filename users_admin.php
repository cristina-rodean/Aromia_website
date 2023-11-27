<?php
    include("session.php");
    
    $users= array();

    $sql = "SELECT * FROM aromiausers";
    $result = $db->query($sql);

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        // Fetch associative array of products
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    } else {
        echo "No users found";
    }

    // Close the database connection
    $db->close();
    
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
  <div class="admin-page">
    <h2>Users</h2>
     <?php if(isset($_GET['edit_success_mess'])){?>
        <p class="text-center" style="color: #9E7AA1;"><?php echo $_GET['edit_success_mess'];?></p>
    <?php } ?>

    <?php if(isset($_GET['edit_failure_mess'])){?>
        <p class="text-center" style="color: #734085;"><?php echo $_GET['edit_failure_mess'];?></p>
    <?php } ?>

    <?php if(isset($_GET['deleted_successfully'])){?>
        <p class="text-center" style="color: #9E7AA1;"><?php echo $_GET['deleted_successfully'];?></p>
    <?php } ?>

    <?php if(isset($_GET['deleted_failure'])){?>
        <p class="text-center" style="color: #734085;"><?php echo $_GET['deleted_failure'];?></p>
    <?php } ?>


    <table class="admin-table">
        <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user){?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['email'];?></td>
            <td><?php echo $user['password'];?></td>
            <td><a class="btn" href="edit_user.php?id=<?php echo $user['id'];?>">Edit</a></td>
            <td><a class="btn" href="delete_user.php?id=<?php echo $user['id'];?>">Delete</a></td>
        </tr>
       <?php } ?>

       
        </tbody>
    </table>
        <a class="admin-btn" href="new_user.php">Add new user</a>
</div>
    
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