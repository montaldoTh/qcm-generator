<?php 

require '../app/entity/QCM.php';

Class QcmManager{
    private $pdo;

    public function __construct(){
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=myqcm','root');
        }catch(PDOException $e){
            echo 'Error : ' . $e->getMessage();
            die;
        }
    }
    public function getAll(){
        $req = $this->pdo->prepare('SELECT * FROM qcm');
        $req->execute();
        $result = [];
        $qcms= $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($qcms as $qcm){
            $obj= new QCM();
            $obj->setId($qcm['id']);
            $obj->setTitle($qcm['Title']);
            $result[]= $obj;
        }
        return $result;
    }
    public function insert(string $title){
        $sql = 'INSERT INTO qcm (title) VALUES (:title)';
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'title' => $title,
        ]);
        return $this->pdo->lastInsertId();
    }
}