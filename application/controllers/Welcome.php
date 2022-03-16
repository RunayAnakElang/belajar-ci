<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		// echo "ini halaman awal"
	}

	public function home()
	{
		$this->load->view('home');
		// echo "ini halaman awal"

	}
	public function login()
	{
		$this->session->set_userdata([
			'login' => true,
	         'level' => 'user' 
			]);
		// echo "ini halaman awal"
	}
	public function test_session()
	{
		if($this->session->userdata('login') != true){
			echo "login duluu";
	
		} else {
			
			echo $this->session->userdata('login');
		}
		
	}
	public function admin()
	{
		if($this->session->userdata('login') != true){
			echo "login duluu";
	
		} else {
			if($this->session->userdata('level')==='admin'){
				echo $this->session->userdata('login');
				echo $this->session->userdata('level');
			} else {
				echo "anda bukan admin";
			}
			
			
		}
		
	}

	public function logout()
	{
		echo $this->session->sess_destroy();
		// echo "ini halaman awal"
	}
	

	
	
}
