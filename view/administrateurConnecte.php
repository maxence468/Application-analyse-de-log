<h2>Connexion administrateur</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="index.php?deco">
        Déconnexion
    </a>
    <a href="index.php?lesStats">
        Les statistiques
    </a>
    <a href="index.php?administration"">
        Administration
    </a>
</div>