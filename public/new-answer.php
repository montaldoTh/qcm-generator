<?php

require '../app/Manager/QuestionManager.php';
$questionManager = new QuestionManager();
$questions = $questionManager->getAll();
$message = "";
if(isset($_POST['submit']))
{
    if(!empty($_POST['texte']))
    {
        if(!isset($_POST['is_good'])){
            $_POST['is_good'] = 0;
        } else {
            $_POST['is_good'] = 1;
        }
        require '../app/Manager/AnswerManager.php';
        $manager = new AnswerManager();

        $answerId = $manager->insert($_POST['texte'], $_POST['is_good'], $_POST['id_question']);

        if($answerId)
        {
            header('Location: /index-answer.php'); die;
        }
        else
        {
            var_dump($_POST);
            $message = "Une erreur s'est produite lors de l'enregistrement";
        }
    }
    else
    {
        $message = "Le titre est obligatoire";
    }
}


require '../template/new-answer.tpl.php';