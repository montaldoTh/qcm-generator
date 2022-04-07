<?php

if(isset($_POST['submit']) && isset($_POST['id']))
{

    require '../app/Manager/AnswerManager.php';
    $answerManager = new AnswerManager();
    $answerManager->delete($_POST['id']);

    header('Location: /index-answer.php'); die;

}