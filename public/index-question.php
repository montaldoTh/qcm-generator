<?php

require '../app/Manager/Question_manager.php';

$QTManager = new QuestionManager();
$qRes = $QTManager->getAll(); ?>

<?php require '../template/template-indexq.php';?>