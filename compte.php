<!DOCTYPE html>
<?php 
require "valider.php";
include "conn.php";
$date = date("Y-m-d");
mysqli_query($conn,"update `stagiaire` set status='terminé' WHERE date_de_fin='$date'") or die(mysqli_error($conn));
$query_att = $conn->query("SELECT COUNT(*) as total FROM `stagiaire` WHERE `status` = 'en cours'") or die(mysqli_error($conn));
$att = $query_att->fetch_array();
$query_att2 = $conn->query("SELECT COUNT(*) as total FROM `stagiaire` WHERE `status` = 'en attente'") or die(mysqli_error($conn));
$att2 = $query_att2->fetch_array();
$query_att3 = $conn->query("SELECT COUNT(*) as total FROM `stagiaire` WHERE `status` = 'accepté'") or die(mysqli_error($conn));
$att3= $query_att3->fetch_array();
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion de stage</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "admin.css" />
    </head>
    <body id="page-top">
       
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand">Admin</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="compte.php">Stagiaires</a></li>
                <li ><a href="logout.php">déconnection</a></li>
               <!-- <li><a href="admins.php">Admins</a></li>  -->
                
                </ul>
            </div>
        </nav>
        <section class="page-section" style="background:black;">
        </section>
        <section class="page-section">
        <div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Stagiaires</div>
				<a class = "btn btn-success" href = "ajouter_stagiaire.php"> Ajouter un stagiaire</a>
                
				<a class = "btn btn-success" href = "ajouter_sadmin.php"> Ajouter un subadmin</a>
                <a class = "btn btn-success" href = "enc.php">  Liste des stagiaires en cours <?php echo $att['total']?></a>
                <a class = "btn btn-success" href = "interface1.php"> Chercher stagiaire</a>
                <a class = "btn btn-success" href = "liste_attente.php"> Liste des stagiaires en attente <?php echo $att2['total']?></a>
                
                

				<br />
				<br /> 
                <table id = "table" class = "table table-bordered">
					<thead>
						<tr>
                           
							<th>Nom</th>
							<th>Prenom</th>
                            <th>Cin</th>
                            <th>Age</th>
                            <th>Telephone</th>
                            <th>Status</th>
                           
                           
                            <th>Encadrant</th>
                            
							
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $conn->query("SELECT * FROM `stagiaire` WHERE nom IS NOT NULL") or die(mysqli_error($conn));
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							
							<td><?php echo $fetch['nom']?></td>
                            <td><?php echo $fetch['prenom']?></td>
                            <td><?php echo $fetch['cin']?></td>
                            <td><?php echo $fetch['age']?></td>
                            <td><?php echo $fetch['telephone']?></td>
                            <td><?php echo $fetch['status']?></td>
                            
                            <td><?php echo $fetch['responsable_fonctionnaire']?></td>
                            
                            
							</tr>
						<?php
							}
						?>
					</tbody>
				</table> 
                
				
			</div>
		</div>
	    </div>
        
        </section>
        
        <script src = "../js/jquery.js"></script>
        <script src = "../js/bootstrap.js"></script>
        <script src = "../js/jquery.dataTables.js"></script>
        <script src = "../js/dataTables.bootstrap.js"></script>	
        <script type = "text/javascript">
	        function confirmationDelete(anchor){
            var conf = confirm("Etes vous sur de vouloir supprimer ce stagiaire?");
            if(conf){
                window.location = anchor.attr("href");
                }
            } 
        </script>
        <script type = "text/javascript">
            $(document).ready(function(){
                $("#table").DataTable();
            });
        </script>
    </body>
</html>
