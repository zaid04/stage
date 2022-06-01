<?php
include "conn.php";
    if(isset($_POST['ajouters'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin = $_POST['cin'];
        $age = $_POST['age'];
        $rf=$_POST['rf'];
        $num=$_POST['tp'];
        $cv= $_FILES['cv']['name'];
        $cv_tmp = $_FILES['cv']['tmp_name'];
		$date1 = $_POST['db'];
        $date = date("Y-m-d");
        $date2 = $_POST['df'];
        $niv=$_POST['niveau'];
        move_uploaded_file($cv_tmp,'C:\xampp\htdocs\stage\assets\img\cv\\' . $cv);
        
       $s="en attente";
       $acc1=0;
   
        $conn->query("INSERT INTO `stagiaire` (nom,prenom,cin,age,telephone,status,cv,responsable_fonctionnaire,date_de_debut,date_de_fin,accepté,niveau) VALUES('$nom','$prenom','$cin', '$age','$num','$s','$cv','$rf','$date1','$date2',$acc1,'$niv')") or die(mysqli_error($conn));
        header("Location: scompte.php");
    }
?>