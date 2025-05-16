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

    public function getHistoriqueAdmin() {
        $sql = 'SELECT * FROM loueur ORDER BY date DESC';
        $result = $this->bdd->query($sql);
        $data = $result->fetchAll();
        return $data;
    }

    public function getHistoriqueAdminByDate($date){
        $sql = 'SELECT * FROM loueur WHERE DATE(date) = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([$date]);
        $data = $result->fetchAll();
        return $data;

    }

    public function getByLoueurByDate($id,$date) {
        $sql = "SELECT * FROM loueur WHERE nom = ? AND date = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$id, $date]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getLastDate() {
        $sql = 'SELECT nom, date, timeouts, appelsKO FROM loueur WHERE date = (SELECT MAX(date) FROM loueur)';
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function create($loueur) {
        $sql = 'INSERT INTO loueur (id,nom,appelsKO,timeouts,motdepasse,pays,email,numTel,date) VALUES (?,?,?,?,?,?,?,?,?)';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $loueur->getId(),
            $loueur->getNom(),
            $loueur->getAppelsKO(),
            $loueur->getTimeouts(),
            $loueur->getMotdepasse(),
            $loueur->getPays(),
            $loueur->getEmail(),
            $loueur->getNumTel(),
            $loueur->getDate()->format('Y-m-d H:i:s'),
        ]);
    }

    public function update($loueur,$ancienNom) {
        $sql = 'UPDATE loueur SET nom = ?, appelsKO = ?, timeouts = ?, motdepasse = ?, pays = ?, email = ?, numTel = ?, date = ? WHERE id = ? AND nom = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $loueur->getNom(),
            $loueur->getAppelsKO(),
            $loueur->getTimeouts(),
            $loueur->getMotdepasse(),
            $loueur->getPays(),
            $loueur->getEmail(),
            $loueur->getNumTel(),
            $loueur->getDate()->format('Y-m-d H:i:s'),
            $loueur->getId(),
            $ancienNom
        ]);
    }

    public function delete($nom) {
        $sql = 'DELETE FROM loueur WHERE nom = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([$nom]);
    }
}