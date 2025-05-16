<?php
session_start();
use BO\loueur;
require_once("model/DAO/logsDAO.php");
require_once("model/DAO/loueurDAO.php");
$ldao = new LogsDAO();
$message_erreur = '';
$message_valider = '';
$loueurDAO = null;
$loueur = null;
$vue = 'connexion';
$logs = [];
$log = null;



if(isset($_POST['btnConnexion'])) {
    //Connexion
    $dao = new LoueurDAO();
    if (isset($_POST['nom']) && isset($_POST['motdepasse'])) {
        $utilisateur = $dao->connecteUtilisateur($_POST['id'],$_POST['nom'],$_POST['motdepasse']);
        if($utilisateur) {
            $_SESSION['loueur_nom'] = $_POST['nom'];
            $_SESSION['isAdmin'] = $utilisateur['isAdmin'];
            //CONNEXION ADMIN
            if($utilisateur['isAdmin']) {
                $vue = 'administrateurConnecte';
                $title = 'Administrateur';
            }
            //CONNEXION UTILISATEUR
            else{
                $vue = 'utilisateurConnecte'; //à verifier
            }
        }else{
            $message_erreur = 'Identifiants incorrect';
        }

    }
}
//Les statistiques ADMIN
if (isset($_GET['lesStats'] )) {
    $vue = 'lesStats';
}

if (isset($_GET['historiqueAdmin'] )) {
    $vue = 'historiqueAdmin';
    $dao = new LoueurDAO();
    $logs = $ldao->getHistoriqueAdmin();
    if(isset($_POST['btnChercher']) && $_POST['date'] != "") {
        $logs = $ldao->getHistoriqueAdminByDate($_POST['date']);
    }
}
// les stats de tout les loueurs
if (isset($_GET['derniereStatsAdmin'])) {
    $vue = 'derniereStatsAdmin';
    $dao = new LoueurDAO();
    $logs = $ldao->getLastDate();

    if (!is_array($logs)) {
        $logs = []; // Sécurité si la méthode échoue
    }
}

if (isset($_GET['statsParLoueur'])) {
    $vue = 'statsParLoueur';
    $dao = new LoueurDAO();
    $logs = [];

    if (isset($_POST['btnRecherche']) && !empty($_POST['id']) && !empty($_POST['date'])) {
        $log = $ldao->getByLoueurByDate($_POST['id'],$_POST['date']);
        if (is_array($log)) {
            $logs = $log;
        }
    }
}


if (isset($_GET['administration'])) {
    $vue = 'administration';
}
if (isset($_GET['creerLoueur'])) {
    $vue = 'creerLoueur';
    $dao = new LoueurDAO();
    if(isset($_POST['btnValider'])) {
        if (isset($_POST['nom']) && isset($_POST['motdepasse']) && isset($_POST['id']) && isset($_POST['pays']) && isset($_POST['email']) && isset($_POST['numTel'])) {

                $date = new DateTime();
                $loueur = new Loueur($_POST['id'], $_POST['nom'],$_POST['motdepasse'], $_POST['pays'], $_POST['email'], $_POST['numTel']);
                $dao->create($loueur);
                $message_valider = 'Loueur ' . $_POST['nom'] . ' créé';
        } else {
            $message_erreur = 'Vous devez remplir les champs obligatoires';
        }
    }
}

if (isset($_GET['modifierLoueur'])) {
    $vue = 'modifierLoueur';
    $dao = new LoueurDAO();
    if(isset($_POST['btnConnexion'])){
        if($_POST['id'] == TRUE ){
            if($_POST['nouveauNom'] != '' && $_POST['motdepasse'] != '' && $_POST['pays'] != '' && $_POST['email'] != '' && $_POST['numTel'] != ''){
                $date = new DateTime();
                $loueur = new Loueur($_POST['id'], $_POST['nouveauNom'], $_POST['motdepasse'], $_POST['pays'], $_POST['email'], $_POST['numTel']);
                $dao->update($loueur);
                $message_valider = 'Loueur '. $_POST['nouveauNom'].' modifié';
            }
            else{
                $message_valider = 'Vous devez remplir tous les champs';
            }
        }
        else{
            $message_valider = 'vous devez entrer un id';
        }
    }


}
if (isset($_GET['supprimerLoueur'])) {
    $vue = 'supprimerLoueur';
    $dao = new LoueurDAO();
    if(isset($_POST['btnValider'])){
        if ($_POST['id'] != ''){
            $dao->delete($_POST['id']);
            $message_valider = 'Loueur '. $_POST['id'].' supprimé';
        }
        else{
            $message_valider = 'vous devez entrer un nom';
        }
    }
}

//Deconexion
if(isset($_GET['deco'])){
    session_unset();
    session_destroy();
    $vue = 'connexion';
}

include('view/header.php');
if($vue == 'connexion'){
    include('view/connexion.php');
}
if($vue == 'administrateurConnecte'){
    include('view/administrateurConnecte.php');
}
if($vue == 'lesStats'){
    include('view/LesStats.php');
}
if($vue == 'historiqueAdmin'){
    include('view/historiqueAdmin.php');
}
if($vue == 'derniereStatsAdmin'){
    include('view/derniereStatsAdmin.php');
}
if($vue == 'statsParLoueur'){
    include('view/statsParLoueur.php');
}
if($vue == 'administration'){
    include('view/administration.php');
}
if($vue == 'creerLoueur'){
    include('view/creationLoueur.php');
}
if($vue == 'modifierLoueur'){
    include('view/modifLoueur.php');
}
if($vue == 'supprimerLoueur'){
    include('view/supprLoueur.php');
}

include('view/footer.php');