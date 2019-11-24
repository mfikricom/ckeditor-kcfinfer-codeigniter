<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model{

    function publish_article($title, $content){
        $data  = array(
            'article_title'   => $title,
            'article_content' => $content
        );
        $this->db->insert('tbl_article', $data);
    }

    function get_article_by_id($id){
        $query = $this->db->get_where('tbl_article', array('article_id' => $id));
        return $query;
    }

}