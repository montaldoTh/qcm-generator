<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h1>Mes QCMs</h1>

    <a href="/new-qcm.php">Nouveau</a>
    <a href="/index-question.php">Question</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($qcms as $qcm): ?>
            <tr>
                <td><?= $qcm->getId() ?></td>
                <td><?= $qcm->getTitle() ?></td>
                <td>
                    <a href="/edit-qcm.php?id=<?= $qcm->getId()?>">Modifier</a>
                    <form action="/delete-qcm.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                        <input type="hidden" name="id" value="<?= $qcm->getId() ?>" />
                        <input type="submit" name="submit" value="Supprimer" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>
