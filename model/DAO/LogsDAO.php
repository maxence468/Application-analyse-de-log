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
        $sql = "SELECT * FROM logs INNER JOIN loueur ON loueur.id = logs.loueur_id WHERE loueur_id = ? AND date = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$id, $date]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSumByIdByDate($id,$date){
        $sql = "SELECT SUM(erreurKO) as total_erreur_KO, SUM(erreurTimeouts) as total_erreur_Timeouts FROM logs  WHERE loueur_id = ? AND date = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$id, $date]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getSumTotalByDate($date){
        $sql = "SELECT SUM(erreurKO) as total_erreur_KO, SUM(erreurTimeouts) as total_erreur_Timeouts FROM logs  WHERE date = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$date]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }






}