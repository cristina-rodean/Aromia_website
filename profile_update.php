
<?php
 
    include("session.php");
    if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $fname=$_POST['username'];
    $email = $_SESSION['login_user'];
    //$select= "select * from aromiausers where id='$id'";
    $result=mysqli_query($db, "SELECT * FROM aromiausers WHERE email='" . $email . "'");
    $row = mysqli_fetch_array($result);


    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update aromiausers set fname='$fname',email='$email' where id='$id'";
       $sql2=mysqli_query($db,$update);
         if($sql2)
       { 
           /*Successful*/
           header('location:account_info.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }

 }
 
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>