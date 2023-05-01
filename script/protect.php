<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['idMember'])) {
    die("You are not loged in.");
}

?>