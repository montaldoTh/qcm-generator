<?php 

require '../app/Manager/QCM_Manager.php';

$QManager = new QcmManager();
$qcmRes = $QManager->getAll();
var_dump($qcmRes)?>

<?php require '../template/template-index.php';?>