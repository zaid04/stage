<?php
    require_once "conn.php";
    mysqli_query($conn,"DELETE FROM `stagiaire` WHERE `cin` = '$_GET[cin2]'") or die(mysqli_error($conn));
    
    header("Location: liste_attente.php");
?>