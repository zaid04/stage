<?php require_once 'imprimer.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des stagiaires</title>
</head>
<body>
<div style="margin-bottom: 100px;/* margin-bottom: 100px; */">
    <img style="height: 44px;width: 204px;float: left;padding-top: 25px;" src="Marsa-Maroc.png">  
    <p style="float: right;">
    Marsa Maroc <br> port asfi,Marsa Maroc <br> Tél. 06 00 00 00 00 <br> Fax. 05 00 00 00 00 <br> Site 
    </p>
  </div>
    <h1>Liste des stagiaires</h1>
    <table id = "table" class = "table table-bordered" border="1px">
					<thead>
                 
						<tr>
							<th>Nom</th>
							<th>Lundi</th>
							<th>Mardi</th>
							<th>Mercredi</th>
                            <th>Jeudi</th>
                            <th>Vendredi</th>
                            <th>Samedi</th>
                            <th>Dimanche</th>
                            <th>Responsable fonctionnaire</th>
                            
						</tr>
                    
					</thead>
					<tbody>
                    <?php
                    include "conn.php";
						$query = $conn->query("SELECT * FROM `stagiaire` where status='en cours'") or die(mysqli_error($conn));
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['nom']." ".$fetch['prenom']?></td>
							<td></td>
							<td></td>
                            <td ></td>
                            <td ></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td><?php echo $fetch['responsable_fonctionnaire']?></td>
                            
						</tr>
					    <?php
						}
					?>
					</tbody>
				</table>



</body>
</html>