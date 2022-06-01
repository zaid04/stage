
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
                <a class="navbar-brand">Sub_Admin</a>
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
				<div class = "alert alert-info">Ajouter un stagiaire</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action="sadd.php" enctype="multipart/form-data">
						<div class = "form-group">
							<label>Nom: </label> <br>
							<input class = "form-control" type="text" name="nom" id="type">
						</div>
						<div class = "form-group">
							<label>Prenom: </label>
							<input type = "text" class = "form-control" name = "prenom" />
						</div>
						<div class = "form-group">
							<label>Cin: </label>
							<input type = "text" class = "form-control" name = "cin" />
						</div>
                        <div class = "form-group">
							<label>Téléphone: </label>
							<input type = "tel" class = "form-control" name = "tp" minlength="10" maxlength="10" />
						</div>
						<div class = "form-group">
							<label>Date de debut: </label>
							<input type = "date" class = "form-control" name = "db" />
						</div>
						<div class = "form-group">
							<label>Age: </label>
							<input type = "number" class = "form-control" name = "age" />
						</div>
						<div class = "form-group">
							<label>Remarque </label>
							<br>
							<textarea name="remarque" rows="5" cols="50">
                           
                             </textarea>
						</div>
						<div class = "form-group">
							<label>Cv: </label>
							<input type = "file" class = "form-control" name = "cv" />
						</div>
						<br />
						<div class = "form-group">
							<label>Responsable fonctionnaire: </label>
							<input type = "text" class = "form-control" name = "rf" />
						</div>
						<div class = "form-group">
					   </div>
					   <div class = "form-group">
					   <label>Niveau: </label>
						<select name="niveau" required="required">
                         <option value="bac+2">bac+2</option>
                        <option value="bac+3">bac+3</option>
						<option value="bac+4">bac+4</option>
						<option value="bac+5">bac+5</option>
                       </select>
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