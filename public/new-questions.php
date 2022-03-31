<?php 
$message= "";
if(isset($_POST['submit'])){
    if(!empty($_POST['title'])){
        require '../app/Manager/Question_manager.php';
        $manager = new QuestionManager();
        $questions = $manager->insert($_POST['title'], $_GET['id_qcm']);
        if($questions){
            header('location: /');die;
        }else{
            $message="Une erreur s'est produite";
        }
    }else{
        $message= "titre obligatoire";
    }
}

require '../template/template-nquestions.php';