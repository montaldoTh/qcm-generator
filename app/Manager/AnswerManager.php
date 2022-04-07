<?php

require '../app/Entity/Answer.php';
require_once '../app/Manager/Manager.php';

class AnswerManager extends Manager
{
    
    public function getAll()
    {
        $sql = 'SELECT * FROM answer';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $answers = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($answers as $answer)
        {
            $result[] = (new Answer())->hydrate($answer);
        }

        return $result;
    }

    public function get(int $id) : Answer
    {
        $sql = "SELECT * FROM answer WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        $answer = (new Answer())->hydrate($result);

        return $answer;
    }

    public function insert(string $texte, int $is_good, int $id_question)
    {
        $sql = "INSERT INTO answer (texte, is_good, id_question ) VALUES (:texte, :is_good, :id_question)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute(compact('texte', 'is_good', 'id_question'));

        return $this->getPdo()->lastInsertId();
    }

    public function update(int $id, string $texte, int $is_good, int $id_question)
    {
        $sql = "UPDATE answer SET texte = :texte, is_good = :is_good ,id_question = :id_question WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id','texte','is_good','id_question'));
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM answer WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id'));
    }

}