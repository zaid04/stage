<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>créer compte</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
  

    <!-- Login Form -->
    <form action="register1.php" method="post">
      <input type="text" id="name" class="fadeIn second" name="nom" placeholder="nom">
      <input type="text" id="lname" class="fadeIn third" name="prenom" placeholder="prenom">
      <input type="text" id="nu" class="fadeIn second" name="nu" placeholder="nom d'utilisateur">
      <input type="password" id="psswd" class="fadeIn third" name="passwd" placeholder="mot de passe">
      <input type="submit" name="register" class="fadeIn fourth" value="créer compte">
    </form>

    
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Se connecter</a>
    </div>

  </div>
</div>
</body>
</html>