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
		//if not first time to answer the survey, put answers in the db
		if($qnum != NULL && $ans != NULL){
			$this->question->putAnswer($qnum, $ans, 1);
		} else {
			//make the system get the first question
			$qnum = 0;
			$ans = 0;
		}

		//the next question depends on the questions already answered
		$qnum = $this->question->evalQuestion($qnum, $ans);

		//if the system has already identified the sickness, redirect to results and recommendations
		if(!is_integer($qnum)) {
			redirect(base_url("home/result/$qnum"));
		}
		else {
			//get the next recommended question and possible choices
			$data['question'] = $this->result_table($this->question->getQuestion($qnum))[0];
			$data['choices'] = $this->result_table($this->question->getChoices($qnum));
			$this->load->view('templates/header');
			$this->load->view('identify', $data);
			$this->load->view('templates/footer');
		}
	}

	public function ajax_search(){
		if($this->input->post('query')){
			$query = $this->input->post('query');
			$results = $this->result_table($this->faq->searchFaq($query));
			$values = '';
			foreach ($results as $result) {
				$values = $values . $result->faq_id . ',' . $result->faq_question . ',' . $result->faq_answer . ' ; ';
			}
			// echo $values;
			echo json_encode($results);
		}
		else{
			redirect('home/seek');
		}
	}

	public function result($res){
		$data['result'] = $res;
		$data['description'] = 'yee';

		$this->load->view('templates/header');
		$this->load->view('result', $data);
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

	public function appointment(){
		if($this->input->post()){
			$name = $this->input->post('name');
			$number = $this->input->post('number');
			$msgid = $this->user->addUser($name, $number);

	        $arr_post_body = array(
	            "message_type" => "SEND",
	            "mobile_number" => $number,
	            "shortcode" => "29290469148",
	            "message_id" => $msgid,
	            "message" => "Good morning " . $name . "! For walk-in consultations, you can visit Dr. X at Room 123 Hospital Y, Quezon City from 2pm-5pm. Thank you so much and SeizeTheDay!",
	            "client_id" => "f3be0f5b7d2abc0ce6fc0dccf7ecc049272af5679fbf5a547429cbaddb0391ff",
	            "secret_key" => "36718d987648bb0e46b32dcff3c751d7c445453091dcf4079c7662b6cad653d0"
	        );

	        $query_string = "";
	        foreach($arr_post_body as $key => $frow)
	        {
	            $query_string .= '&'.$key.'='.$frow;
	        }

	        $URL = "https://post.chikka.com/smsapi/request";

	        $curl_handler = curl_init();
	        curl_setopt($curl_handler, CURLOPT_URL, $URL);
	        curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
	        curl_setopt($curl_handler, CURLOPT_POSTFIELDS, urlencode($query_string));
	        curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
	        $responseasd = curl_exec($curl_handler);
	        curl_close($curl_handler);
		}
		redirect(base_url());
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
