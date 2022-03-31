<?php require '../template/partiels/inc-top.php'; ?>
<div class='container'>
    <h1>Mes Questions</h1>
    <a href="new-question.php">Nouveau</a>
    <a href="/">QCM</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titres</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($qRes as $question): ?>
            <tr>
                <td><?= $question->getId() ?></td>
                <td><?= $question->getTitle() ?></td>
                <td>
                    <a href="/edit-question.php?id=<?= $question->getId() ?>">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require '../template/partiels/inc-bot.php'; ?>
    
