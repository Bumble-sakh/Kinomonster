<?php

class Films_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getFilms($slug = FALSE, $limit, $type = 1) {
        if($slug === FALSE) {
            $query = $this->db
                ->where('category_id', $type)
                ->order_by('add_date', 'desc')
                ->limit($limit)
                ->get('movie');
            
                return $query->result_array();
        }

        $query = $this->db->get_where('movie', array('slug' => $slug));
        return $query->row_array();
    }

    public function getFilmsByRating($row_count, $offset, $category = 1) {
        $query = $this->db
            ->order_by('rating', 'desc')
            ->where('category_id', $category)
            ->get('movie', $row_count, $offset);

        return $query->result_array();
    }

    public function getMoviesOnPage($row_count, $offset, $type = 1) {
         $query = $this->db
            ->order_by('add_date', 'desc')
            ->where('category_id', $type)
            ->get('movie', $row_count, $offset);
        
        return $query->result_array();
    }

}