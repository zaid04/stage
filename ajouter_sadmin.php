<!DOCTYPE html>

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
				<div class = "alert alert-info">Ajouter un sous administrateur</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action="adds.php" enctype="multipart/form-data">
						<div class = "form-group">
							<label>Nom: </label> <br>
							<input class = "form-control" type="text" name="nom" id="type">
						</div>
						<div class = "form-group">
							<label>Prenom: </label>
							<input type = "text" class = "form-control" name = "prenom" />
						</div>
                        <div class = "form-group">
							<label>nom d'utilisateur: </label>
							<input type = "text" class = "form-control" name = "uname" />
						</div>
                        <div class = "form-group">
							<label>Mot de passe: </label>
							<input type = "password" class = "form-control" name = "pwd" />
						</div>
						
						<div class = "form-group">
							<button name = "ajouters" class = "btn btn-info form-control">ajouter</button>
						</div>
					</form>
					
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