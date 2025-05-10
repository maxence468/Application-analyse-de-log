<h2>Dernières statistiques</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="connexion.php">Déconnexion</a>
    <a href="mesStats">Retour en arrière</a>
    <a href="historiqueLoueur.php">Historique</a>
</div>
<?php/*
for($loueur as $infoDuJour) {
    echo '<h3>' . $loueur->getId() . '</h3>';
    echo '<h3>' . $loueur->getNom() . '</h3>';
    echo '<p>' . $loueur->getTimeouts() . '</p>';
    echo '<p>' . $loueur->getRetourKO() . '</p>';
    echo '<small>Publié le ' . $loueur->getDate() . '</small>';
}*/
?>