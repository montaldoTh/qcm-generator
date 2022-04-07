<?php

require_once '../app/Entity/Entity.php';

class Answer extends Entity
{

    private string $texte;

    private int $is_good;

    private int $id;

    private int $id_qcm;

    private int $id_question;

    public function getTexte()
    {
        return $this->texte;
    }

    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    public function getIsGood()
    {
        return $this->is_good;
    }

    public function setIsGood($is_good)
    {
        $this->is_good = $is_good;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getIdQcm()
    {
        return $this->id_qcm;
    }

    public function setIdQcm($id_qcm)
    {
        $this->id_qcm = $id_qcm;

        return $this;
    }
 
    public function getIdQuestion()
    {
        return $this->id_question;
    }

    public function setIdQuestion($id_question)
    {
        $this->id_question = $id_question;

        return $this;
    }
}