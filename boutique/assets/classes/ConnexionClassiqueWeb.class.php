<?php

class ConnexionClassiqueWeb{
    private $_etat=false;
    private $_PDO;

    public function __construct(){
        try{
            $_PDO = new PDO("sqlsrv:Server=INFO-SIMPLET;Database=Classique_Web","ETD","ETD",array(PDO::ATTR_PERSISTENT => false));
        }
        catch(Exception $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }   
        $this->_etat = true;
    }

    public function etatConnexion(){
        if($this->_etat){
            echo "<kbd>La connexion à la base a <span style=\"color:green;\">réussie</span>.</kbd>";
        }
        else{
            echo "<kbd>La connexion à la base a <span style=\"color:red;\">échouée</span>.</kbd>";
        }
    }
}

?>