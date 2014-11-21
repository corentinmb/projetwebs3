<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../assets/img/favicon.ico">
<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>Klassiq - Connexion</title>
<link rel="stylesheet" href="../assets/css/signin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container">
    <div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
      <strong>Information:</strong> Veuillez vous connecter avec les identifiants suivants: demo/demo
    </div>
      <form class="form-signin" role="form" method="post" action="../index.php">
        <h2 class="form-signin-heading">Connexion</h2>
        <input type="text" name="inputPseudo" class="form-control" placeholder="Nom d'utilisateur" required autofocus>
        <input type="password" name="inputMdp" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi ?
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
