<h3><?php echo htmlspecialchars($_SESSION['loueur_nom']) ?></h3>
<div id="btnConnexion">
    <a href="index.php?deco">Déconnexion</a>
    <a href="index.php?lesStats">Retour en arrière</a>
    <a href="index.php?derniereStatsAdmin">Dernière statistiques</a>
    <a href="index.php?statsParLoueur">Statistiques par loueur</a>
</div>

<form method="post" action="index.php?historiqueAdmin">
    <input type="date" name="date">
    <input name="btnChercher" type="submit" value="Chercher par jour">
</form>

<h1>Historique des Logs</h1>


    <?php if (isset($logs) && !empty($logs)): ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>nom</th>
                <th>Date</th>
                <th>Erreur KO</th>
                <th>Erreur Timeout</th>
                <th>pays</th>
                <th>email</th>
                <th>numero de telephone</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $log['id']) ?></td>
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
        <p>Aucun log à afficher.</p>
    <?php endif; ?>