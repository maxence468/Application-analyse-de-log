<?php
session_start();
require_once('connexionMySQL.php');
include('model/BO/loueur.php');

class loueurDAO extends connexionMySQL {
    public function __construct() {
        parent::__construct();
    }

    public function connecteUtilisateur($utilisateur) {
        $res = '';
        if ($this->bdd) {
            $sql = 'SELECT * FROM loueur WHERE nom = ?';
            $result = $this->bdd->prepare($sql);
            $result->execute( [$utilisateur] );


            $data = $result->fetch();
            if($data) {
                $_SESSION['id'] = intval($data['identifiant']);
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['appelsKO'] = intval($data['appelsKO']);
                $_SESSION['timeouts'] = intval($data['timeouts']);
                $_SESSION['pays'] = intval($data['pays']);
                $_SESSION['email'] = intval($data['email']);
                $_SESSION['numTel'] = intval($data['numTel']);
                $_SESSION['date'] = intval($data['date']);
            } else {
                $res = "Utilisateur incorrect";
            }
        }
        return $res;
    }
}