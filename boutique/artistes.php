
<?php 
/* SUIVI DE SESSION */ 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- IMPORT HEAD -->
    <?php include("assets/parts/head.php");?>
  </head>
  <body>
    <!-- IMPORT NAVBAR -->
    <?php include("assets/parts/navbarConnection.php");?>


    <div class="container-fluid">
      <div class="row">
            <?php include("assets/parts/menu.php");?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Les artistes <br/><small>compositeurs, musiciens, auteurs...</small></h1>
          <div class="table-responsive">
            <?php 
              
                require 'assets/classes/ConnexionClassiqueWeb.class.php';
                $maConnexion = new ConnexionClassiqueWeb();
                $maConnexion->etatConnexion();
              ?>
          </div>
        </div>
      </div>
    </div>
    <?php include("assets/parts/javascriptImports.php");?>
  </body>
</html>
