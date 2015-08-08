<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('homepage');
		$this->load->view('templates/footer');
	}

	public function identify($qnum = NULL, $ans = NULL){
		if($qnum != NULL && $ans != NULL){
			$this->question->putAnswer($qnum, $ans, 1);
		} else {
			$qnum = 0;
			$ans = 0;
		}
		$qnum = $this->question->evalQuestion($qnum, $ans);
		$data['question'] = $this->result_table($this->question->getQuestion($qnum))[0];
		$data['choices'] = $this->result_table($this->question->getChoices($qnum));
		$this->load->view('templates/header');
		$this->load->view('identify', $data);
		$this->load->view('templates/footer');
	}

	public function seek(){
		$this->load->view('templates/header');
		$this->load->view('faq');
		$this->load->view('templates/footer');
	}

	public function connect(){
		$this->load->view('templates/header');
		$this->load->view('connect');
		$this->load->view('templates/footer');
	}

	function result_table($query){
        $table = array();
        foreach ($query->result() as $row) {
            $table[] = $row;
        }
        $query->free_result();
        return $table;
    }
}
