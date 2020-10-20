<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Posts extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('posts_model');
	}

	public function index() {
		$this->data['title'] = "Все посты";
		$this->data['posts'] = $this->posts_model->viewPosts(FALSE, 8);

		$this->load->view('templates/header', $this->data);
		$this->load->view('posts/index', $this->data);
		$this->load->view('templates/footer');

	}

	public function view($slug = NULL) {
		$this->data['posts_item'] = $this->posts_model->viewPosts($slug);

		if(empty($this->data['posts_item'])) {
			show_404();
		}

		$this->data['title'] = $this->data['posts_item']['title'];
		$this->data['content'] = $this->data['posts_item']['text'];

		$this->load->view('templates/header', $this->data);
		$this->load->view('posts/view', $this->data);
		$this->load->view('templates/footer');
	}

	public function create() {
		$this->data['title'] = "добавить пост";

		if($this->input->post('slug') && $this->input->post('title') && $this->input->post('text')) {

			$slug = $this->input->post('slug');
			$title = $this->input->post('title');
			$text = $this->input->post('text');

			if($this->posts_model->createPost($slug, $title, $text)) {
				$this->load->view('templates/header', $this->data);
				$this->load->view('posts/success', $this->data);
				$this->load->view('templates/footer');
			}
		} else {
			$this->load->view('templates/header', $this->data);
			$this->load->view('posts/create', $this->data);
			$this->load->view('templates/footer');
		}

	}


	public function edit($slug = NULL) {
        
        if($this->input->post('slug') && $this->input->post('title') && $this->input->post('text')) {
			$slug = $this->input->post('slug');
			$title = $this->input->post('title');
			$text = $this->input->post('text');

			if($this->posts_model->editPost($slug, $title, $text)) {
				echo "Пост успешно отредактирован";
			}
        }

        $this->data['title'] = "редактировать пост";
        
		$this->data['posts_item'] = $this->posts_model->viewPosts($slug);

        // if(empty($data['news_item'])) {
        //     show_404();
        // }

        $this->data['title_posts'] = $this->data['posts_item']['title'];
        $this->data['content_posts'] = $this->data['posts_item']['text'];
        $this->data['slug_posts'] = $this->data['posts_item']['slug'];        
        
		$this->load->view('templates/header', $this->data);
		$this->load->view('posts/edit', $this->data);
		$this->load->view('templates/footer');

	}

	public function delete($slug = NULL) {
		$this->data['posts_delete'] = $this->posts_model->viewPosts($slug);

		if(empty($this->data['posts_delete'])) {
			show_404();
		}

		$this->data['title'] = "удалить новость";
		$this->data['result'] = "Ошибка удаления ".$this->data['posts_delete']['title'];

		if($this->posts_model->deletePost($slug)) {
			$this->data['result'] = "Пост ".$this->data['posts_delete']['title']." успешно удален";
		}

		$this->load->view('templates/header', $this->data);
		$this->load->view('posts/delete', $this->data);
		$this->load->view('templates/footer');

	}


}