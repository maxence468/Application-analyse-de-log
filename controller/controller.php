<?php
require_once("model/DAO/loueurDAO.php");
include('view/header.php');
include('view/connexion.php');
include('view/footer.php');

if(isset($_POST['btnConnexion'])) {
    if(isset($_POST['nom']) && $_POST['nom'] == 'administrateur' && isset($_POST['motdepasse']) && $_POST['motdepasse'] == 'administrateur') {
        $title = 'Administrateur';
        include('view/header.php');
        include('view/lesStats.php');
        include('view/footer.php');
    } else if(isset($_POST['nom']) && $_POST['nom'] != '' && isset($_POST['motdepasse']) && $_POST['motdepasse'] != '') {
        $result = $loueurDAO->connecteUtilisateur($_POST['nom'], $_POST['motdepasse']);
        if($result == "Utilisateur ou mot de passe incorrect") {
            $message_erreur = 'Utilisateur ou mot de passe incorrect';
            $title = 'Connexion';
            include('view/header.php');
            include('view/connexion.php');
            include('view/footer.php');
        } else {
            $title = 'Jeu de la roulette';
            include('view/header.php');
            include('view/mesStats.php');
            include('view/footer.php');
        }
    } else {
        $message_erreur = 'Il faut remplir les champs!';
        $title = 'Connexion';
        include('view/header.php');
        include('view/connexion.php');
        include('view/footer.php');
    }
}