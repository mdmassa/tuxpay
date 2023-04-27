<?php

function createAccount($username, $password, $email, $distro) {
     include 'con.php';

     $sql = "INSERT INTO User (id, username, password, email, linuxDistro, balance, registerDate) VALUES ('$username', '$password', '$email', '$distro', NOW())";
  
     $rs = mysqli_query($con, $sql);
     
     if($rs) {
         header("Location: http://localhost/tuxpay/sign-in.html/?msg=Account successfully created!");
     }
 
     mysqli_close($con);
}

?>