<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?lesStats">Retour en arrière</a>
    <a href="index.php?historiqueAdmin">Historique</a>
    <a href="index.php?statsParLoueur">Statistiques par loueur</a>
</div>

<form method="post" action="index.php?derniereStatsAdmin">
<table id="derniereStatsLoueur">
    <tr>
        <td colspan="3"><input type="text" name="id" min="0" placeholder="Nom du loueur" required /></td>
    </tr>

    <tr>
        <td><br><a href="#"><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></a></td>
        <td><br><input class="btn btn-primary" name="btnRecherche" type="submit" value="Chercher" /></td>

        <?php if (isset($_POST['btnRecherche'])): ?>
            <?php if (!empty($logs)): ?>
                <table>
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Date</th>
                        <th>Erreur KO</th>
                        <th>Erreur Timeout</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($logs as $log): ?>
                        <tr>
                            <td><?= htmlspecialchars((string) $log['nom']) ?></td>
                            <td><?= htmlspecialchars((string) $log['date']) ?></td>
                            <td><?= htmlspecialchars((string) $log['appelsKO']) ?></td>
                            <td><?= htmlspecialchars((string) $log['timeouts']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Aucun log trouvé pour ce loueur.</p>
            <?php endif; ?>
        <?php endif; ?>


    </tr>
</table>
</form>