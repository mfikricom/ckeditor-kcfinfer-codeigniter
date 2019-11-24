<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
    function __construct(){
        parent::__construct();
        // load libary native session
        $this->load->library('Nativesession','nativesession');
        // load model blog model
        $this->load->model('Blog_model','blog_model');
    }

    function index(){
        if($this->nativesession->get('status')=='loggedin'){ 
            $this->load->view('blog_view');
        }else{
            // redirect ke login jika session unset
			redirect('login');
        } 
    }

    // function publish article
    function publish(){
        $title = $this->input->post('title',TRUE);
        $content = $this->input->post('content',TRUE);
        $this->blog_model->publish_article($title, $content);
        $id = $this->db->insert_id();
        redirect('blog/show_article/'.$id);
    }
    
    // function show article
    function show_article(){
        $id = $this->uri->segment(3);
        $data = $this->blog_model->get_article_by_id($id);
        if($data->num_rows() > 0){
            $row = $data->row();
            $x['title']   = $row->article_title;
            $x['content'] = $row->article_content;
            $this->load->view('blog_show_view', $x);
        }else{
            echo "ID Not Found.";
        }
    }
} 