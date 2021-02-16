<?php

class Question{

    private $_id;
    private $_question;
    private $_reponse;
    private $_date;
    private $_importance;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function getId(){
        return $this->_id;
    }

    public function getQuestion(){
        return $this->_question;
    }

    public function getReponse(){
        return $this->_reponse;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getImportance(){
        return $this->_importance;
    }

    public function setId(int $id)
    {
        $this->_id = $id;
    }

    public function setQuestion(string $question)
    {
       $this->_question = $question;
    }

    public function setReponse(string $reponse)
    {
        $this->_reponse = $reponse;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }

    public function setImportance(int $num)
    {
        if ($num >= 0 ){
            $this->_importance = $num;
            return $this;
        }
        return  false;
        
    }

    /**
     * Method hydratation 
     * @param array $data
     */

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}



?>