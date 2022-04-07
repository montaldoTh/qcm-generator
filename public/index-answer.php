<?php

require '../app/Manager/AnswerManager.php';

$manager = new AnswerManager();
$answers = $manager->getAll();

require '../template/index-answer.tpl.php';