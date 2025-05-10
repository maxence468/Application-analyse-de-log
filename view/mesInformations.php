<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="connexion.php">Déconnexion</a>
    <a href="loueurConnecte.php">Retour en arrière</a>
    <a href="mesStats.php">Mes statistiques</a>
</div>
<?php/*
for($loueur connected) {
    echo '<h3>'.$loueur->getNom().'</h3>';
    echo '<p>'.$loueur->getPays().'</p>';
    echo '<p>'.$loueur->getEmail().'</p>';
    echo '<p>'.$loueur->getNumTel().'</p>';
}*/
?>



