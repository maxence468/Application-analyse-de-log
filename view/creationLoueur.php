<h2>Création d'un loueur</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?lesStats">Retour en arrière</a>
    <a href="index.php?modifierLoueur">Modifier un loueur</a>
    <a href="index.php?supprimerLoueur">Supprimer un loueur</a>
</div>
<p>Créer votre loueur</p>
<?php if($message_valider != '')
    echo "<div class=\"alert alert-danger errorMessage\">$message_valider</div>";
?>
<form method="post" action="index.php?creerLoueur">
    <table id="creationLoueur">
        <tr>
            <td colspan="3"><input type="number" name="id" min="0" placeholder="Id" required /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="nom" placeholder="Nom" required /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="password" name="motdepasse" placeholder="Mot de passe" required /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="pays" placeholder="Pays" required /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="email" placeholder="Email" required /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="numTel" placeholder="+33" required /></td>
        </tr>

        <tr>
            <td><br><a href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
            <td><br><input class="btn btn-primary" name="btnValider" type="submit" value="Ajouter" /></td>
        </tr>
    </table>
</form>