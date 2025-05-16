<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>

<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?lesStats">Retour en arrière</a>
    <a href="index.php?historiqueAdmin">Historique</a>
    <a href="index.php?derniereStatsAdmin">Dernière statistiques</a>
</div>

<form method="post" action="index.php?statsParLoueur">
    <table id="statsLoueur">
        <tr>
            <td colspan="3">
                <input type="number" name="id" placeholder="Id du loueur" required />
            </td>
            <td colspan="3">
                <input type="date" name="date">
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></td>
            <td><input class="btn btn-primary" name="btnRecherche" type="submit" value="Chercher" /></td>
        </tr>
    </table>
</form>

<?php if (isset($_POST['btnRecherche'])):
    if(!empty($logs)) : ?>
        <h1>Statistique pour le loueur : <?= $logs[0]['nom'] ?> </h1>
    <?php endif;
endif; ?>


<?php if (!empty($sum) || !empty($sumTotal)) : ?>
    <table >
        <thead>
        <tr>
            <th>Type d'erreur</th>
            <th>Loueur</th>
            <th>Total jour</th>
            <th>Pourcentage</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Erreur KO</td>
            <td><?= $sum['total_erreur_KO'] ?? 0 ?></td>
            <td><?= $sumTotal['total_erreur_KO'] ?? 0 ?></td>
            <td><?= round($sum['total_erreur_KO'] / $sumTotal['total_erreur_KO'] * 100)?> %</td>
        </tr>
        <tr>
            <td>Erreur Timeouts</td>
            <td><?= $sum['total_erreur_Timeouts'] ?? 0 ?></td>
            <td><?= $sumTotal['total_erreur_Timeouts'] ?? 0 ?></td>
            <td><?= round($sum['total_erreur_Timeouts'] / $sumTotal['total_erreur_Timeouts'] * 100)?> %</td>
        </tr>
        </tbody>
    </table>
<?php endif; ?>





<?php if (isset($_POST['btnRecherche'])): ?>
    <?php if (!empty($logs)): ?>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Date</th>
                <th>Erreur KO</th>
                <th>Erreur Timeout</th>
                <th>Pays</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $log['nom']) ?></td>
                    <td><?= htmlspecialchars((string) $log['date']) ?></td>
                    <td><?= htmlspecialchars((string) $log['erreurKO']) ?></td>
                    <td><?= htmlspecialchars((string) $log['erreurTimeouts']) ?></td>
                    <td><?= htmlspecialchars((string) $log['pays']) ?></td>
                    <td><?= htmlspecialchars((string) $log['email']) ?></td>
                    <td><?= htmlspecialchars((string) $log['telephone']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun log trouvé pour ce loueur.</p>
    <?php endif; ?>
<?php endif; ?>