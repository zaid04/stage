<?php
include "conn.php";
    if(isset($_POST['ajouters'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pwd = $_POST['pwd'];
        $uname=$_POST['uname'];
       
        $conn->query("INSERT INTO `s_admin` (nom,prenom,username,password) VALUES('$nom','$prenom','$uname', '$pwd')") or die(mysqli_error($conn));
        header("Location: compte.php");
    }
?>