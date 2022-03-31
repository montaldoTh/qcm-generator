<?php 

$message= "";
if(isset($_POST['submit'])){
    if(!empty($_POST['title'])){
        require '../app/Manager/QCM_Manager.php';
        $manager = new QcmManager();
        $qcmId = $manager->insert($_POST['title']);
        if($qcmId){
            header("location: new-questions.php?id_qcm=$qcmId"); die;
        }else{
            $message="Une erreur s'est produite lors de l'enregistrement";
        }
    }else{
        $message = "Le titre est OBLIGATOIRRRE";
    }
}


require '../template/template-qcm.php';