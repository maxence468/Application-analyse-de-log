<?php
require_once('connexionMySQL.php');
include('model/BO/Logs.php');

class LogsDAO extends connexionMySQL{

    public function getHistoriqueAdmin() {
        $sql = 'SELECT * FROM `logs` INNER JOIN loueur WHERE loueur.id = logs.loueur_id';
        $result = $this->bdd->query($sql);
        $data = $result->fetchAll();
        return $data;
    }

    public function getHistoriqueAdminByDate($date){
        $sql = 'SELECT * FROM logs INNER JOIN loueur ON loueur.id = logs.loueur_id WHERE DATE(date) = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([$date]);
        $data = $result->fetchAll();
        return $data;

    }

    public function getLastDate() {
        $sql = 'SELECT * FROM logs INNER JOIN loueur ON loueur.id = logs.loueur_id WHERE date = (SELECT MAX(date) FROM logs)';
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getByLoueurByDate($id,$date) {
        $sql = "SELECT * FROM logs INNER JOIN loueur ON loueur.id = logs.loueur_id WHERE nom = ? AND date = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$id, $date]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }





}