
<!DOCTYPE html>
<?php
include "conn.php";
    if(isset($_POST['modifiers'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin = $_POST['cin'];
        $rf=$_POST['rf'];
        $age = $_POST['age'];
        $status=$_POST['status'];
        $num=$_POST['tp'];
		$df = $_POST['drf'];
		if($status=='terminé'){
			date_default_timezone_set('UTC');
			$df=date("Y-m-d", time()); 
			$conn->query("update `stagiaire` set nom='$nom',prenom='$prenom',age='$age',telephone='$num',status='$status',responsable_fonctionnaire='$rf',date_de_fin=$df where cin='$_REQUEST[cin2]'") or die(mysqli_error($conn));	
		}
        
        $conn->query("update `stagiaire` set nom='$nom',prenom='$prenom',age='$age',telephone='$num',status='$status',responsable_fonctionnaire='$rf',date_de_fin='$df' where cin='$_REQUEST[cin2]'") or die(mysqli_error($conn));
    
        header("Location: compte.php");
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modifier stagiaire</title>
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
                <li><a href="admins.php">Admins</a></li>
                
                </ul>
            </div>
        </nav>
        <section class="page-section" style="background:black;">
        </section>
        <section class="page-section">
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Modifier stagiaire</div>
				<br />
                <?php
					$query = $conn->query("SELECT * FROM `stagiaire` WHERE `cin` = '$_REQUEST[cin2]'") or die(mysqli_error($conn));
					$fetch = $query->fetch_array();
				?>
				<div class = "col-md-4">	
					<form method = "POST" action="" enctype="multipart/form-data">
						<div class = "form-group">
							<label>Nom: </label> <br>
							<input class = "form-control" type="text" value = "<?php echo $fetch['nom']?>" name="nom" id="type" >
						</div>
						<div class = "form-group">
							<label>Prenom: </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['prenom']?>" name = "prenom" />
						</div>
						<div class = "form-group">
							<label>Cin: </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['cin']?>" name = "cin" />
						</div>
                        <div class = "form-group">
							<label>Téléphone: </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['telephone']?>" name = "tp" />
						</div>
                        <div class = "form-group">
							<label>status: </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['status']?>" name = "status" />
						</div>
						<div class = "form-group">
							<label>Age: </label>
							<input type = "number" class = "form-control" value = "<?php echo $fetch['age']?>" name = "age" />
						</div>
						<div class = "form-group">
							<label>Cv: </label>
							<input type = "file" class = "form-control" value = "<?php echo $fetch['cv']?>" name = "cv" />
						</div>
						
                        <div class="form-group">
                            <label>Document: </label>
                            <input type = "file" class = "form-control" value = "<?php echo $fetch['docs']?>" name = "doc" />
                        </div>
						<br />
						<div class = "form-group">
							<label>Responsable fonctionnaire: </label>
							<input type = "text" class = "form-control" name = "rf"  value = "<?php echo $fetch['responsable_fonctionnaire']?>"/>
						</div>
						<div class = "form-group">
							<label>Date de fin de stage: </label>
							<input type = "date" class = "form-control" name = "drf" />
						</div>
						<div class = "form-group">
							<button name = "modifiers" class = "btn btn-info form-control">modifier</button>
						</div>
					</form>
					<?php require_once 'edit.php'?>
				</div>
			</div>
		</div>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>