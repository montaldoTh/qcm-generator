<?php

if(isset($_GET['id']))
{

    $message = "";

    // Récupère les données de la question dont l'id est == à $_GET['id']
    require '../app/Manager/Question_Manager.php';
    $questionManager = new QuestionManager();
    $question = $questionManager->get($_GET['id']);

    // On recupère tous les qcms depuis la db
    require '../app/Manager/QCM_Manager.php';
    $qcmManager = new QcmManager();
    $qcms = $qcmManager->getAll();
    
    if(isset($_POST['title'])){
        $questionManager->update($_POST['title'], intval($_GET['id']));
    }
    require '../template/template-editQ.php';
}