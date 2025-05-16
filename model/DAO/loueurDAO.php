<?php
require_once('connexionMySQL.php');
include('model/BO/loueur.php');

class loueurDAO extends connexionMySQL {
    public function __construct() {
        parent::__construct();
    }

    public function connecteUtilisateur($id, $nom, $motdepasse) {
        $res = null;
        if ($this->bdd) {
            $sql = 'SELECT * FROM loueur WHERE id = ? AND nom = ? AND motdepasse = ?';
            $result = $this->bdd->prepare($sql);
            $result->execute( [$id, $nom, $motdepasse]);
            $data = $result->fetch(PDO::FETCH_ASSOC);

            if($data){
                $res = $data;
            }
        }
        return $res;
    }








    public function create($loueur) {
        $sql = 'INSERT INTO loueur (id,nom,motdepasse,pays,email,telephone) VALUES (?,?,?,?,?,?)';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $loueur->getId(),
            $loueur->getNom(),
            $loueur->getMotdepasse(),
            $loueur->getPays(),
            $loueur->getEmail(),
            $loueur->getNumTel(),
        ]);
    }

    public function update($loueur) {
        $sql = 'UPDATE loueur SET nom = ?, motdepasse = ?, pays = ?, email = ?, telephone = ? WHERE id = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $loueur->getNom(),
            $loueur->getMotdepasse(),
            $loueur->getPays(),
            $loueur->getEmail(),
            $loueur->getNumTel(),
            $loueur->getId(),
        ]);
    }

    public function delete($id) {
        $sql = 'DELETE FROM loueur WHERE id = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([$id]);
    }
}