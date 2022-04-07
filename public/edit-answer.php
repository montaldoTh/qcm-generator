<?php

if(isset($_GET['id']))
{

    $message = "";

    // Récupère les données de la question dont l'id est == à $_GET['id']
    require '../app/Manager/AnswerManager.php';
    $answerManager = new AnswerManager();
    $question = $answerManager->get($_GET['id']); 

    require '../app/Manager/QuestionManager.php';
    $questionManager = new QuestionManager();
    $qcms = $questionManager->getAll();

    if(isset($_POST['submit']))
    {
        try
        {
            $formErrors = [];
            if(empty($_POST['texte']))
                $formErrors[] = "Le texte est obligatoire";

            if(empty($_POST['id_question']))
            $formErrors[] = "Le choix d'une question est obligatoire !";

            if(count($formErrors) > 0)
                throw new Exception(implode("<br />", $formErrors));
                // int $id, string $texte, int $is_good, int $id_question
            $questionManager->update($_GET['id'], $_POST['texte'], $_POST['is_good'], $_POST['id_question']);
            header('Location: /index-answer.php');
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }
        
    }

    require '../template/edit-answer.tpl.php';
}