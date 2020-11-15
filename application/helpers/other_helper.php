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