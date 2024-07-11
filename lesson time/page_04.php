<?php
session_start();

if(isset($_SESSION["fname"])){

    unset($_SESSION["fname"]);

    header("location: page_03.php");
    exit();
}