<!DOCTYPE html>
<?php 
include "conn.php";

$query_att = $conn->query("SELECT COUNT(*) as total FROM `stagiaire` WHERE `status` = 'en cours'") or die(mysqli_error($conn));
$att = $query_att->fetch_array();
$query_att2 = $conn->query("SELECT COUNT(*) as total FROM `stagiaire` WHERE `status` = 'en attente'") or die(mysqli_error($conn));
$att2 = $query_att->fetch_array();
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
                <a class="navbar-brand">Sub_Admin</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="scompte.php">Stagiaires</a></li>
                
                
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
				<a class = "btn btn-success" href = "sajouter_stagiaire.php"> Ajouter un stagiaire</a>
                <a class = "btn btn-success" href = "imprimer.php"> Liste des stagiaires en cours <?php echo $att['total']?></a>
                
				<br />
				<br />  
                <form action="ssearch.php" method="post">
                <div class="input-group rounded">
                <input type="search" name="cin" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
               </span>
               </div> 
            </form>
				<table id = "table" class = "table table-bordered">
					<thead>
                 
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Cin</th>
							<th>Age</th>
                            <th>téléphone</th>
                            <th>cv</th>
                            <th>Documents</th>
                            <th>Status</th>
                            <th>Date de debut</th>
                            
                            <th>Responsable fonctionnaire</th>
                            <th><center> Action</center></th>
						</tr>
                    
					</thead>
					<tbody>
                    <?php
						$query = $conn->query("SELECT * FROM `stagiaire`") or die(mysqli_error($conn));
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['nom']?></td>
							<td><?php echo $fetch['prenom']?></td>
							<td><?php echo $fetch['cin']?></td>
                            <td ><?php echo $fetch['age']?></td>
                            <td ><?php echo $fetch['telephone']?></td>
                            <td><a href="assets/img/cv/<?php echo $fetch['cv']?>">cv</a></td>
                            <td><a href="assets/img/doc/<?php echo $fetch['docs']?>">documents</a></td>
                            <td ><?php echo $fetch['status']?></td>
                            <td ><?php echo $fetch['date_de_debut']?></td>
                           
        
                            <td><?php echo $fetch['responsable_fonctionnaire']?></td>
                            <td><center><a class = "btn btn-warning" href = "modifier_stagiaire.php?cin2=<?php echo $fetch['cin']?>" >Modifier</a> <a class = "btn btn-warning" href="imprimeratt.php?cin2=<?php echo $fetch['cin']?>">Imprimer attestation</a> 
                            </center>
                        </td>
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
