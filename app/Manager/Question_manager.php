<?php 

require '../app/entity/Question.php';

Class QuestionManager{
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
        $req = $this->pdo->prepare('SELECT * FROM question');
        $req->execute();
        $result = [];
        $questions= $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($questions as $question){
            $obj= new Question();
            $obj->setTitle($question['title']);
            $obj->setIdQcm($question['id_qcm']);
            $obj->setId($question['id']);
            $result[]= $obj;
        }
        return $result;
    }
    public function insert(string $title, int $id_qcm){
        $sql = 'INSERT INTO question (title, id_qcm) VALUES (:title, :id_qcm)';
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'title' => $title,
            'id_qcm' => $id_qcm,
        ]);
        return $this->pdo->lastInsertId();
    }
}