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
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Connexion</h2>
        <input type="email" id="inputPseudo" class="form-control" placeholder="Nom d'utilisateur" required autofocus>
        <input type="password" id="inputMdp" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi ?
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>

    </div> <!-- /container -->


   <?php include("../assets/parts/javascriptImport.php");?>
  </body>
</html>
