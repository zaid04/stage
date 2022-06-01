<?php require_once 'imprimeratt.php';

 ?>
<!DOCTYPE html>
<?php
                    require_once 'conn.php';
					$query = $conn->query("SELECT * FROM `stagiaire` WHERE `cin` = '$_REQUEST[cin2]'") or die(mysqli_error($conn));
					$fetch = $query->fetch_array();
	?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>attestation</title>
</head>

<body cz-shortcut-listen="true">
  <div style="margin-bottom: 100px;/* margin-bottom: 100px; */">
    <img style="height: 44px;width: 204px;float: left;padding-top: 25px;" src="Marsa-Maroc.png">  
    <p style="float: right;">
    Marsa Maroc <br> port asfi,Marsa Maroc <br> Tél. 06 00 00 00 00 <br> Fax. 05 00 00 00 00 <br> Site  
    </p>
  </div>

  <div style="clear: both;"></div>


<div data-canvas-width="343.0378903035412" style="text-align: center; font-weight: bold; font-size: 40px; padding: 100px;">
  ATTESTATION DE STAGE
</div>

<div>
  <p>
      Nous soussignés, Monsieur Mohamed Bouzhar, chef de departement informatique, atteste que Stagaire <?php echo $fetch['nom']." ".$fetch['prenom'] ?>, a effectué un stage pratique de fin de formation du <?php echo $fetch['date_de_debut'] ?> au <?php echo $fetch['date_de_fin'] ?> 
        dans notre service logiciel en sa qualité de Développeur d'Applications
  </p>
          <br><br>
  <p>
  En foi de quoi, la présente attestation lui est délivrée pour servir et valoir ce que de droit.
  </p>
</div>

    <br><br><br>


    <div>
      <p style="text-align: right;padding-right: 20px;"> Fait à Asfi, le <?php echo date("Y/m/d"); ?> </p>
    </div>

   


      <div>signature</div>

    







</body>


</html>