<?php
/**
* Model for getting questions, possible choices.
* Evaluates previous answers from user to get next question.
*/
class Question extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function getQuestion($qnum){
        $this->db->limit(1);
        return $this->db->get_where('questions', array('question_id' => $qnum));
    }

    function getChoices($qnum){
        return $this->db->query('SELECT DISTINCT question_id, choice_id, choice_text FROM questions_choices NATURAL JOIN choices WHERE question_id = 1');
    }

    function putAnswer($qnum, $cnum)
}
?>