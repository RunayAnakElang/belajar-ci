<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    public function tambah_data()
	{
		$this->load->view('tambah_data');
		// echo "ini halaman awal"
	}
    public function insert_data()
	{
		// print_r($this->input->post());
		// echo "ini halaman awal"
        $data = [
            'email'=> $this->input->post('email'),
            'nama'=> $this->input->post('nama'),
            'alamat'=> $this->input->post('alamat'),
            'tanggal_lahir'=> $this->input->post('tgl_lahir'),
            'no_telepon'=> $this->input->post('no_tlep'),
            'password'=> $this->input->post('email')
         
        ];
        $this->db->insert('siswa', $data);
	}

    
}
?>