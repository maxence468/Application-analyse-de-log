<h2>Modification d'un loueur</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?lesStats">Retour en arrière</a>
    <a href="index.php?creerLoueur">Créer un loueur</a>
    <a href="index.php?supprimerLoueur">Supprimer un loueur</a>
</div>
<p>Modifier votre loueur</p>
<?php if($message_valider != '')
    echo "<div class=\"alert alert-danger errorMessage\">$message_valider</div>";
?>
<br>
<form method="post" action="index.php?modifierLoueur">
    <table id="modif                                                                                                                                                                                                                                                                                                                                                                                                                                    Loueur">
        <tr>
            <td colspan="3"><input type="number" name="id" min="0" placeholder="Id du loueur à modifier" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="ancienNom" placeholder="Nom du loueur à modifier" /></td>
        </tr>

        <tr>
            <td colspan="3"><input type="text" name="nouveauNom" placeholder="Nouveau nom du loueur" /></td>
        </tr

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
            <td><br><a class="effacer" href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
            <td><br><input class="btn btn-primary" name="btnConnexion" type="submit" value="Modifier" /></td>
        </tr>
    </table>
</form>