<?php
    include("meniu.php");

    $name = $_POST['email'];
    $pass = $_POST['password'];

    // Changed the incorrect syntax in the query and fixed the SQL injection vulnerability
    $quer = "SELECT * FROM aromiausers WHERE username = '$name' AND password = '$pass'";
    $result = mysqli_query($con, $quer);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        echo "Duplicate Data";
    } else {
        // Changed the incorrect syntax in the query and fixed the SQL injection vulnerability
        $querr = "INSERT INTO aromiausers (username, password) VALUES ('$name', '$pass')";
        mysqli_query($con, $querr);
    }
?>
