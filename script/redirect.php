<?php 

include 'main.php';

if(isset($_POST[create-account])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check_pass = $_POST['check-pass'];
    $email = $_POST['email'];
    $distro = $_POST['distro'];

    createAccount($username, $password, $email, $distro);
}
?>