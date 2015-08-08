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

    function putAnswer($qid, $ans, $userid){
        return $this->db->insert('answers', array('question_id' => $qid, 'choice_id' => $ans, 'user_id' => $userid));
    }

    function evalQuestion($qnum, $ans){
        $lookup = [ [1, 0,0,0,0],
                    [0, 3, "healthy", 0, 0],
                    [0, 0, 0, 7, 12],
                    [0, 6, 6, 0, 0],
                    [0, 5, "healthy",0,0],
                    [0, "HIV", 6, 0, 0],
                    [0, 2, 15, 0, 0],
                    [0, "chlam", 8, 0, 0],
                    [0, 9, 10, 0, 0],
                    [0, "gon", 11, 0, 0],
                    [0, "chlam","dead end",0,0],
                    [0, "tricho", 10, 0, 0],
                    [0, 13, 14, 0, 0],
                    [0, "gon", 10, 0, 0],
                    [0, 13, 14, 3, 4],
                    [0, 16, 3, 0, 0],
                    [0, 17, 19, 0, 0],
                    [0, "scabies", 18, 0, 0],
                    [0, "scabies", "pubic lice", 0,0],
                    [0, "yeast", 20, 0, 0],
                    [0, 21, "dead end", 0, 0],
                    [0, "herpes", 22, 0, 0],
                    [0, "syph", "warts", 0, 0]
                  ];
        return $lookup[$qnum][$ans];
    }
}
?>