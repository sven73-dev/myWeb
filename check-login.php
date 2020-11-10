<?php
    session_start();

    $secretPassword = 'admin';

    if ($_POST["password"] == $secretPassword) {
        $_SESSION["login"] = "on";
        header("location: admin.php");
    } else {
        header("location: login.php");
    }

?>