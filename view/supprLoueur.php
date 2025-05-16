<h2>Suppression d'un loueur</h2>
<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?administration">Administration</a>
    <a href="index.php?creerLoueur">Créer un loueur</a>
    <a href="index.php?modifierLoueur">Modifier un loueur</a
</div>

<?php if($message_valider != '')
    echo "<div class=\"alert alert-danger errorMessage\">$message_valider</div>";
?>

<p>Selectionner le  loueur que vous voulez supprimer en saissisant son nom</p>
<form method="post" action="index.php?supprimerLoueur">
    <table id="suppr">                                                                                                                                                                                                                                                                                                                                                                                                                               Loueur">
        <tr>
            <td colspan="3"><input type="text" name="id" placeholder="ID" /></td>
        </tr>
        <tr>
            <td><br><a class="effacer" href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
            <td><br><input class="btn btn-primary" name="btnValider" type="submit" value="Supprimer" /></td>
        </tr>
    </table>
</form>