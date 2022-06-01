<?php
session_start();
include "conn.php";

if(isset($_POST['nu']) && isset($_POST['passwd'])){
    $nom= $_POST['nu'];
    $psswd= $_POST['passwd'];
    $_SESSION['login_u']= $nom;
    $_SESSION['login_p']= $psswd;
    $sql="select * from admin where username='$nom' and password='$psswd'";
    $sql2="select * from s_admin where username='$nom' and password='$psswd'";
    $result= $conn->query($sql);
    $result2= $conn->query($sql2);
   
    if(mysqli_num_rows($result)!=0){
       
        header("Location: compte.php");
    }
    elseif(mysqli_num_rows($result2)!=0){
       
                        
        header("Location: scompte.php");
    }
    else{
        header("Location: index.php");
    }
    
    
}