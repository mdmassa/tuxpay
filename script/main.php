<?php

function createAccount($username, $password, $email, $distro) {

   include ('con.php');

   $sql = "INSERT INTO Wallet (amount, status) VALUES (NULL, 'not owned')";
   $rs = mysqli_query($con, $sql);

   $sql2 = "SELECT * FROM Wallet WHERE status = 'not owned'";
   $rs2 = mysqli_query($con, $sql2);

   while($row = mysqli_fetch_assoc($rs2)) {
      $wallet = $row['idWallet'];
   }

   $sql3 = "INSERT INTO Member (username, password, email, linuxDistro, registerDate, FK_idWallet) VALUES ('$username', '$password', '$email', '$distro', NOW(), '$wallet')";
   $rs3 = mysqli_query($con, $sql3);

   $sql4 = "UPDATE Wallet SET status = 'owned' WHERE idWallet = '$wallet'";
   $rs4 = mysqli_query($con, $sql4);
   
   if($rs4) {
      echo "<script language='javascript' type='text/javascript'>
      alert('Account successfully created. Please sign-in.');window.location
      .href='http://localhost/tuxpay/login.php';</script>";
   } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('Something went wrong. Try again later.');window.location
      .href='http://localhost/tuxpay/sign-up.php';</script>";
   }

   mysqli_close($con);
   
}

function login($username, $password) {

   include ('con.php');

   $sql = "SELECT * FROM Member WHERE username = '$username' AND password = '$password'";

   $rs = mysqli_query($con, $sql);

   if (mysqli_num_rows($rs) == 1){
      $user = mysqli_fetch_assoc($rs);

      if(!isset($_SESSION)) {
         session_start();
      }

      $_SESSION['idMember'] = $user['idMember'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['password'] = $user['password'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['linuxDistro'] = $user['linuxDistro'];
      $_SESSION['registerDate'] = $user['registerDate'];
      $_SESSION['FK_idWallet'] = $user['FK_idWallet'];

      header("Location: dashboard.php");

   } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('Username or password are incorrect. Please try again.');window.location
      .href='http://localhost/tuxpay/login.php';</script>";
   }

    mysqli_close($con);

}

?>