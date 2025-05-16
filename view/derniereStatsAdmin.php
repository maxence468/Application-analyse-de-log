<h3><?= htmlspecialchars($_SESSION['loueur_nom']) ?></h3>

<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?lesStats">Retour en arrière</a>
    <a href="index.php?historiqueAdmin">Historique</a>
    <a href="index.php?statsParLoueur">Statistiques par loueur</a>
</div>

<?php if (!empty($logs)): ?>
    <table id="derniereStatsLoueur">
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
    <p>Aucune donnée à afficher.</p>
<?php endif; ?>
