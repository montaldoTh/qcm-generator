<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <form action="" method="POST">
        <label>Intitulé de la réponse</label>
        <input type="text" name="texte" required/>
        <input type="checkbox" name="is_good" value="true">
        <label for="is_the_good">Est-ce la bonne réponse ?</label>
        <select name="id_question">
            <?php foreach($questions as $question): ?>
                <option value="<?= $question->getId() ?>"><?= $question->getTitle() ?></option>
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
