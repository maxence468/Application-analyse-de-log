<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="connexion.php">Déconnexion</a>
    <a href="lesStats.php">Retour en arrière</a>
    <a href="derniereStatsAdmin.php">Dernière statistiques</a>
    <a href="statsParLoueur.php">Statistiques par loueur</a>
</div>
<?php /*foreach($loueur) {
    echo '<h3>'.$loueur->getId().'</h3>';
    echo '<h3>'.$loueur->getNom().'</h3>';
    echo '<p>'.$loueur->getTimeouts().'</p>';
    echo '<p>'.$loueur->getRetourKO().'</p>';
    echo '<small>Publié le '.$loueur->getDate().'</small>';
}*/
?>