<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Comments extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('comments_model');
	}

	public function add() {

		if($this->input->post('user_id') && $this->input->post('movie_id') && $this->input->post('text')) {

			$user_id = $this->input->post('user_id');
			$movie_id = $this->input->post('movie_id');
			$text = $this->input->post('text');

            $this->comments_model->addComment($user_id, $movie_id, $text)) {
				$this->load->view('templates/header', $this->data);
                $this->load->view('movies/view', $this->data);
                $this->load->view('templates/footer', $this->data);
			}
        }
        else{
            echo 'CAN`T ADD COM';
        }

	}


}