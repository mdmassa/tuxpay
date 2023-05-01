<?php

include ('./script/main.php');

if(isset($_POST['create'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check_pass = $_POST['check-pass'];
    $email = $_POST['email'];
    $distro = $_POST['distro'];

    createAccount($username, $password, $email, $distro);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuxPay | Creating new account</title>
    <link rel="stylesheet" type="text/css"  href="./style/style.css"/>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">

</head>
<body>

    <header>
        
        <div class="logo-container" id="index">
            <a href="./index.php"><center><img class="logo" src="./img/main_logo.png" /></a></center>
        </div>

            <div class="navbar-container">
                <nav>
                    <ul class="nav-list">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about-us.php">About us</a></li>
                        <li><a href="./how-it-works.php">How it works</a></li>
                        <div class="navbar-spacing"></div>
                        <li><a href="./login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
    </header>


    <div class="sign-up">
        <div class="sign-up-title">
            <h1>Create your account.</h1>
        </div>

        <div class="create-account">
            <form action="" method="POST">
                <div class="create-1">
                    <label for="username">Username: *</label><br />
                    <input type="text" name="username" placeholder="Type your username..." id="username" class="input" required>
                    <br />
                    <br />
                    <label for="password">Password: *</label><br />
                    <input type="password" name="password" placeholder="Type your password..." id="password" class="input" required>
                    <br />
                    <br />
                    <label for="check-pass">Repeat password: *</label><br />
                    <input type="password" name="check-pass" placeholder="Repeat your password..." id="check-pass" class="input" required>
                </div>
                <div class="create-2">
                    <label for="email">E-mail: *</label><br />
                    <input type="text" name="email" placeholder="Type your e-mail..." id="email" class="input" required>
                    <br />
                    <br />
                    <label for="distro">Your distro: *</label><br />
                    <select name="distro" class="input-distro" id="distro" required>
                        <option disabled selected>Choose your distro...</option>
                        <option value="Ubuntu">Ubuntu</option>
                        <option value="Debian">Debian</option>
                        <option value="Fedora">Fedora</option>
                        <option value="CentOS">CentOS</option>
                        <option value="Arch Linux">Arch Linux</option>
                        <option value="Other">Other</option>
                    </select>
                    <br />
                    <br />
                    <br />
                    <button class="btn2" type="submit" name="create" id="create">Create account now</button>
                </div>
            </form>
        </div>
    </div>

        

</body>
</html>