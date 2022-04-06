<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <form action="" method="post">
        <label>Intitulé du QCM</label>
        <input type="text" name="title" value="<?= htmlspecialchars($qcm->getTitle()) ?>"/>
        <input type="submit" name="submit" value="Enregistrer" />
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>




<?php require '../template/partials/_bottom.tpl.php'; ?>
