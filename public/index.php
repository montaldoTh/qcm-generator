<?php 

require '../app/Manager/QCM_Manager.php';

$QManager = new QcmManager();
$qcmRes = $QManager->getAll();?>

<?php require '../template/template-index.php';?>