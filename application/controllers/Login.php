<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		// load libary native session
		$this->load->library('Nativesession','nativesession');
    }

	function index(){
		$this->load->view('login_view');
	}

	function auth(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		if($username == 'admin' && $password == 'admin'){
			// set native session jika username benar
			$this->nativesession->set('status', 'loggedin');
			// redirect ke halaman blog
			redirect('blog');
		}else{
			// redirect ke login jika username salah
			redirect('login');
		}
	}

	function logout(){
		$this->nativesession->delete('status');
		redirect('login');
	}
}
