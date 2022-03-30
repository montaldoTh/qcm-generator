<?php require '../template/partiels/inc-top.php'; ?>
<div class="container">
    <form action="" method="POST">
        <label for="title">Titre du QCM</label>
        <input type="text" name="title">
        <input type="submit"  name="submit" value="Enregistrer">
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message?>
    </div>
    <?php endif ;?>
</div>
<?php require '../template/partiels/inc-bot.php'; ?>
