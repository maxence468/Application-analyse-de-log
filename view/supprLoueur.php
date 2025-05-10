<h2>Suppression d'un loueur</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="connexion.php">Déconnexion</a>
    <a href="administration.php.php">Administration</a>
    <a href="creerLoueur.php">Créer un loueur</a>
    <a href="modifierLoueur.php">Modifier un loueur</a
</div>
<p>Selectionner le  loueur que vous voulez supprimer en saissisant son id et son nom</p>
<form method="post" action="index.php">
    <table id="suppr">                                                                                                                                                                                                                                                                                                                                                                                                                               Loueur">
        <tr>
            <td colspan="3"><input type="number" name="id" min="0" placeholder="Id" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="nom" placeholder="Nom" /></td>
        </tr>
        <tr>
            <td><br><a class="effacer" href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
            <td><br><a href="index.php?btnConnexion"><input class="btn btn-primary" name="btnConnexion" type="submit" value="Supprimer" /></a></td>
        </tr>
    </table>
</form>