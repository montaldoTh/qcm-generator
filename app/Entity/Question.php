<?php

class Question
{

    // TODO : ajouter les propriétés
    private int $id_qcm;

    private int $id;

    private string $title;

    private array $answers;
    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    // TODO : Compléter les méthodes

    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }

    /**
     * Get the value of answers
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Get the value of id
     */ 
    public function getIdQcm()
    {
        return $this->id_qcm;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setIdQcm($id)
    {
        $this->id_qcm = $id;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}