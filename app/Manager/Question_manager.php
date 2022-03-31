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

    public function get(int $id) : Question
    {
        $sql = "SELECT * FROM question WHERE id = :id";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        $question = (new Question())
            ->setId($result['id'])
            ->setTitle($result['title'])
            ->setIdQcm($result['id_qcm']);

        return $question;
    }

    public function update(string $title, int $id){
        $sql = "UPDATE question SET title = :title WHERE id = :id";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'title' => $title,
            'id' => $id,
        ]);
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