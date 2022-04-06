<?php

if(isset($_GET['id'])){

    $message = "";

    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcm = $qcmManager->get($_GET['id']);

    if(isset($_POST['submit'])){
        if(empty($_POST['title'])){
            $message = "Le titre est obligatoire";
        } else {
            $qcmManager->update($_GET['id'], $_POST['title']);
            header('location: /index.php');
        }
    }
    

    require '../template/edit-qcm.tpl.php';
}

