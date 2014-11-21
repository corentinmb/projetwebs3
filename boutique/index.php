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
            include("assets/parts/navbarConnection.php");?>


    <div class="container-fluid">
      <div class="row">
            <?php include("assets/parts/menu.php");?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!-- CONTENT -->
        <?php if(isset($_SESSION['connected']))
                 echo $_SESSION['connected'];
         ?>
        </div>
      </div>
    </div>
  </body>
</html>
