<?php 

class Posts_model extends CI_Model {

	public function __construct() {
		$this->load->database();
    }

    public function createPost($slug, $title, $text) {

        $data = array(
			'title' => $title,
			'slug' => $slug, 
			'text' => $text
		);

		return $this->db->insert('posts', $data);

    }

    public function deletePost($slug) {
        
        return $this->db->delete('posts', array('slug' => $slug));

    }

    public function editPost($slug, $title, $text) {

        $data = array(
			'title' => $title,
			'slug' => $slug, 
			'text' => $text
		);

		return $this->db->update('posts', $data, array('slug' => $slug));
        
    }
    
    public function viewPosts($slug = FALSE, $limit = 8) {

        if($slug === FALSE) {
			$query = $this->db->get('posts');
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->row_array();
        
    }

}