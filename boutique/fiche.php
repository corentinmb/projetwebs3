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

            <?php 
                
                require 'assets/classes/ConnexionClassiqueWeb.class.php';
                $maConnexion = new ConnexionClassiqueWeb();
                if(isset($_GET['artiste'])){
                  $artiste=$_GET['artiste'];
                  $req=$maConnexion->getPDO()->query("SELECT Nom_Musicien from Musicien WHERE Nom_Musicien LIKE '".$artiste."%'");
                }
            ?>
            <h1 class="page-header">
            <?php 
              $data=$req->fetch();
              echo '<h1>'.$data['Nom_Musicien'].'</h1>'; 
            ?>
            <br/>
            <small>ICI ECHO SI C'EST UN COMPOSITEUR, MUSICIEN...</small></h1>
            <div class="table-responsive">


          </div>
        </div>
      </div>
    </div>
  </body>
</html>
