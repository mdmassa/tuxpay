<?php
include ('./script/main.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuxPay | Access your account</title>
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
            <h1>Log in.</h1>
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
                    <button class="btn2" type="submit" name="login" id="login">Enter</button>
                </div>
                
            </form>
        </div>
    </div>

        

</body>
</html>