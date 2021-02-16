<?php
require 'Question.php';

class ManagerQuestion{

    private $instanceBdd;

    public function __construct(PDO $pdo)
    {
        $this->setInstanceBdd($pdo);
    }

    public function setInstanceBdd(PDO $pdo){
        $this->instanceBdd = $pdo;
    }

    
    /**
     * getAll
     * classé par ordre d'importance
     * @return array
     */
    public function getAll():array{
        $tab = [];
        $sql = 'SELECT * FROM faq  ORDER BY faq.importance DESC';
        $req = $this->instanceBdd->prepare($sql);
        $req->execute();
        $questions = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach($questions as $value) {
            $question = new Question($value); 
            $tab[]=$question;
        }
        return $tab;
    }

    
    /**
     * find
     * trouver une question en fonction de son Id
     * @param  mixed $id
     * @return Question
     */
    public function find(int $id):Question{
        
        $sql = 'SELECT * FROM faq WHERE id = :id';
        $req = $this->instanceBdd->prepare($sql);
        $req->bindValue('id',$id,PDO::PARAM_INT);
        $req->execute();
        $reponse = $req->fetch(PDO::FETCH_ASSOC);
        $question = new Question($reponse);
        return $question;
    }


    /**
     * methode ajout d'une question dans la base de donnée
     * @param Question $question
     */
    public function addQuestion(array $data)
    {
        $sql = 'INSERT INTO faq (question, reponse, date,importance) VALUES (:question, :reponse, :date,:importance)';
        $req = $this->instanceBdd->prepare($sql);
        $req->bindValue('question', $data['question'], PDO::PARAM_STR);
        $req->bindValue('reponse', $data['reponse'], PDO::PARAM_STR);
        $req->bindValue('date', $data['date'], PDO::PARAM_STR);
        $req->bindValue('importance', $data['importance'], PDO::PARAM_INT);
        $req->execute();
    }

    /**
     * methode suppression d'un objet Question
     * @param Question $question
     */
    public function deleteQuestion(Question $question)
    {
        $sql = 'DELETE FROM faq WHERE id = :id';
        $req = $this->instanceBdd->prepare($sql);
        $req->bindValue('id', $question->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    /**
     * method mise a jour d'une question
     * @param Question $question
     */
    public function updateQuestion(Question $question)
    {
        $sql = 'UPDATE faq SET question = :question, reponse = :reponse, date = :date,importance = :importance WHERE id = :id';
        $req = $this->instanceBdd->prepare($sql);
        $req->bindValue('question', $question->getQuestion(), PDO::PARAM_STR);
        $req->bindValue('reponse', $question->getReponse(), PDO::PARAM_STR);
        $req->bindValue('date', $question->getDate(), PDO::PARAM_STR);
        $req->bindValue('importance', $question->getImportance(), PDO::PARAM_INT);
        $req->bindValue('id', $question->getId(), PDO::PARAM_INT);
        $req->execute();
    }

}





?>