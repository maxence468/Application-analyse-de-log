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
                <input type="text" name="id" placeholder="Nom du loueur" required />
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-warning" name="btnErase" type="reset" value="Effacer" /></td>
            <td><input class="btn btn-primary" name="btnRecherche" type="submit" value="Chercher" /></td>
        </tr>
    </table>
</form>

<?php if (isset($_POST['btnRecherche'])): ?>
    <?php if (!empty($logs)): ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
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
                    <td><?= htmlspecialchars((string) $log['id']) ?></td>
                    <td><?= htmlspecialchars((string) $log['nom']) ?></td>
                    <td><?= htmlspecialchars((string) $log['date']) ?></td>
                    <td><?= htmlspecialchars((string) $log['appelsKO']) ?></td>
                    <td><?= htmlspecialchars((string) $log['timeouts']) ?></td>
                    <td><?= htmlspecialchars((string) $log['pays']) ?></td>
                    <td><?= htmlspecialchars((string) $log['email']) ?></td>
                    <td><?= htmlspecialchars((string) $log['numTel']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun log trouvé pour ce loueur.</p>
    <?php endif; ?>
<?php endif; ?>