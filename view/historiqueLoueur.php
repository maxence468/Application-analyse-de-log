<h2>Historique</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="connexion.php">Déconnexion</a>
    <a href="mesStats.php">Retour en arrière</a>
    <a href="derniereStatsLoueur.php">Dernières statistiques</a>
</div>
<?php foreach($loueur as $infoParJour) {
    echo '<h3>'.$loueur->getId().'</h3>';
    echo '<h3>'.$loueur->getNom().'</h3>';
    echo '<p>'.$loueur->getTimeouts().'</p>';
    echo '<p>'.$loueur->getRetourKO().'</p>';
    echo '<small>Publié le '.$loueur->getDate().'</small>';
}
?>