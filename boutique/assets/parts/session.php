<?php

session_start();
$_SESSION['connected'] = false;

if ((isset($_GET['action'])) && ($_GET['action'] == 'deconnexion')){
    $_SESSION = array();
    session_destroy();
    session_start();
}

if((isset($_POST['inputPseudo']) && isset($_POST['inputMdp'])) &&($_POST['inputPseudo'] == "demo" && $_POST['inputMdp']=="demo")){
  $_SESSION['pseudo'] = $_POST['inputPseudo'];
  $_SESSION['mdp'] = $_POST['inputMdp'];
  $_SESSION['connected'] = true;
}
if(isset($_SESSION['pseudo']) && isset($_SESSION['mdp'])){
  $_SESSION['connected'] = true;
}
?>