<?php require '../template/partiels/inc-top.php'; ?>
<div class='container'>
    <h1>Mes QCMs</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titres</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($qcmRes as $qcm): ?>
            <tr>
                <td><?= $qcm->getId() ?></td>
                <td><?= $qcm->getTitle() ?></td>
                <td>
                    <a href="">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require '../template/partiels/inc-bot.php'; ?>
    
