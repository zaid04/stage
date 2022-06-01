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
        $date2 = $_POST['df'];
        $date = date("Y-m-d");
        $acc=$_POST['acc'];
        $niv=$_POST['niveau'];
        move_uploaded_file($cv_tmp,'C:\xampp\htdocs\stage\assets\img\cv\\' . $cv);
        
        if(($acc=="a")&&($date1>$date)){
        $status="en attente";
        $acc1=1;
        }elseif(($acc=="a")&&($date1==$date)){
            $status="en cours";
            $acc1=1;
        }
        else{
            $status="en attente";
            $acc1=0;
        }
   
        $conn->query("INSERT INTO `stagiaire` (nom,prenom,cin,age,telephone,status,cv,responsable_fonctionnaire,date_de_debut,date_de_fin,accepté,niveau) VALUES('$nom','$prenom','$cin', '$age','$num','$status','$cv','$rf','$date1','$date2',$acc1,'$niv')") or die(mysqli_error($conn));
        header("Location: compte.php");
    }
?>