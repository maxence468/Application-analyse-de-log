<h2>Création d'un loueur</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="connexion.php">Déconnexion</a>
    <a href="administration.php.php">Retour en arrière</a>
    <a href="modifierLoueur.php">Modifier un loueur</a>
    <a href="supprimerLoueur.php">Supprimer un loueur</a>
</div>
<p>Créer votre loueur</p>
<form method="post" action="index.php">
    <table id="creationLoueur">
        <tr>
            <td colspan="3"><input type="number" name="id" min="0" placeholder="Id" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="nom" placeholder="Nom" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="number" name="appelsKO" min="0" placeholder="Nombre d'appelsKO" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="number" name="timeouts" min="0" placeholder="Nombre de timeouts" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="password" name="motdepasse" placeholder="Mot de passe" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="pays" placeholder="Pays" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="email" placeholder="Email" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="numTel" placeholder="+33" /></td>
        </tr>

        <tr>
            <td><br><a href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
            <td><br><a href="index.php?btnConnexion"><input class="btn btn-primary" name="btnConnexion" type="submit" value="Ajouter" /></a></td>
        </tr>
    </table>
</form>