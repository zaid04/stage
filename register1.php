<?php
include "conn.php";

if(isset($_POST['register'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $nu=$_POST['nu'];
    $passwd=$_POST['passwd'];
   $sql="insert into admin values ('$nom','$prenom','$nu','$passwd')";
   
   if($conn->query($sql)===true){
       header("location: index.php");
   }
   
}