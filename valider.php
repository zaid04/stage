<?php
    session_start();
    if(!isset($_SESSION['login_u']) && !isset($_SESSION['login_p'])){
        header("Location: index2.php");
    }
?>