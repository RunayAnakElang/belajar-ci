<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
	{
		$this->load->view('homie');
		// echo "ini halaman awal"
	}
    public function about()
	{
		$this->load->view('about');
		// echo "ini halaman awal"
	}
    public function contact()
	{
		$this->load->view('contact');
		// echo "ini halaman awal"
	}
}
?>