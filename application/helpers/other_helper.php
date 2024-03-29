<?php

if(!function_exists('show_active_menu')) {

    function show_active_menu($slug) {

        $ci  =& get_instance();

        $result = '';

        if($ci->uri->segment(1, 0) === $slug) {

            $result = ' class = "active"';

        }

        if($ci->uri->slash_segment(2, 0).$ci->uri->segment(3, 0) === $slug) {

            $result = ' class = "active"';    
            
        }

        return $result;

    }

}

if(!function_exists('getUserNameById')) {

    function getUserNameById($user_id) {

        $ci  =& get_instance();
        $ci->load->model('dx_auth/users');
        $query = $ci->users->get_user_by_id($user_id);
        $result = $query->row();

        return $result->username;

    }

}