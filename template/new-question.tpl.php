<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <form action="" method="POST">
        <label>Intitulé de la question</label>
        <input type="text" name="title" required/>
        <select name="id_qcm">
            <?php foreach($qcms as $qcm): ?>
                <option value="<?= $qcm->getId() ?>"><?= $qcm->getTitle() ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" value="Enregistrer" />
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
