<?php include("assets/parts/session.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- IMPORT HEAD -->
    <?php include("assets/parts/head.php");?>
    <?php include("assets/parts/javascriptImports.php");?>
  </head>
  <body>
    <!-- IMPORT NAVBAR -->
    <?php if(isset($_SESSION['connected']) && $_SESSION['connected'] == true)
            include("assets/parts/navbarConnected.php");
          else
            include("assets/parts/navbarConnection.php");  
          ?>

    <div class="container-fluid">
      <div class="row">
            <?php include("assets/parts/menu.php");?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Les artistes <br/><small>compositeurs, musiciens, auteurs...</small></h1>
          <div class="table-responsive">

             <form method="post" style="display:inline-block;" class="form-inline">
  <input  type="text" class="form-control" name="texteRecherche" autofocus/>
  <button type="submit" class="btn btn-default">Rechercher d'un artiste</button>
</form>
            <?php 
              
                require 'assets/classes/ConnexionClassiqueWeb.class.php';
                $maConnexion = new ConnexionClassiqueWeb();
                // $maConnexion->etatConnexion();
                if(isset($_POST['texteRecherche'])){
                  $rech=$_POST['texteRecherche'];
                  $req=$maConnexion->getPDO()->query("SELECT Nom_Musicien from Musicien WHERE Nom_Musicien LIKE '".$rech."%'");
                }
                else
                  $req=$maConnexion->getPDO()->query('SELECT Nom_Musicien from Musicien');
            ?>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nom du Musicien</th>
                </tr>
              </thead>
              <tbody>
            <?php
                while ($data = $req->fetch()) {
                  echo '<tr><td>'.$data['Nom_Musicien'].'</td></tr>';
                }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
