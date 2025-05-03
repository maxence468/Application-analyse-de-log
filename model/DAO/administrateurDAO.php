<?php

namespace DAO;

class administrateurDAO extends connexionMySQL {
    public function __construct() {
        parent::__construct();
    }

    public function connecteAdministrateur($utilisateur) {
        $res = '';
        if ($this->bdd) {
            $sql = 'SELECT * FROM administrateur WHERE nom = ?';
            $result = $this->bdd->prepare($sql);
            $result->execute( [$utilisateur] );


            $data = $result->fetch();
            if($data) {
                $_SESSION['id'] = intval($data['identifiant']);
                $_SESSION['nom'] = $data['nom'];
            } else {
                $res = "Utilisateur incorrect";
            }
        }
        return $res;
    }
}