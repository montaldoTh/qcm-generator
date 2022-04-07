<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h1>Mes réponses</h1>

    <a href="/new-answer.php">Nouveau</a>
    <a href="/">QCM</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Texte</th>
                <th>Is The Good</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($answers as $a): ?>
            <tr>
                <td><?= $a->getId() ?></td>
                <td><?= $a->getTexte() ?></td>
                <td><?= $a->getIsGood() == 1 ? 'Bonne réponse' : 'Fausse réponse' ?></td>
                <td>
                    <a href="/edit-answer.php?id=<?= $a->getId() ?>">Modifier</a>
                    <form action="/delete-answer.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                        <input type="hidden" name="id" value="<?= $a->getId() ?>" />
                        <input type="submit" name="submit" value="Supprimer" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>
