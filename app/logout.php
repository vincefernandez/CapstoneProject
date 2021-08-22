<?php 
if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['login'] = null;
        unset($_SESSION['login']);
        header('location: ../index.php');
        ?>