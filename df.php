<?php
    require_once "conn.php";
    mysqli_query($conn,"DELETE FROM `stagiaire` WHERE date_de_fin=") or die(mysqli_error($conn));
    
?>