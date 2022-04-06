<?php 

if(isset($_POST['submit']) && isset($_POST['id'])){
    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcmManager->delete($_POST['id']);

    header('Location: /index.php'); die;
}