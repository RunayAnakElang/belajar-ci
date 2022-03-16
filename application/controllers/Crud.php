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
        $this->load->model('Crud_m');
		// print_r($this->input->post());
		// echo "ini halaman awal"
        $data = [
            'email'=> $this->input->post('email'),
            'nama'=> $this->input->post('nama'),
            'alamat'=> $this->input->post('alamat'),
            'tanggal_lahir'=> $this->input->post('tgl_lahir'),
            'no_telepon'=> $this->input->post('no_tlep'),
            'password'=> $this->input->post('password')
         
        ];
        
        // $this->db->insert('siswa', $data);
        $model_crud = $this->Crud_m->insert_data($data);
        
        if ($model_crud == true){
            echo "data berhasil di simpan";

        }
        else{
            echo"data gagal disimpan";
        }

	}

   public function ambil_data(){
       $this->load->model('Crud_m');
       $data =[
           'data' => $this->Crud_m->ambil_data()
        ];
       
    //    print_r($data);
    //    die;
       $this->load->view('homie', $data);
   }


    public function api(){

       $this->load->view('v_api');
   }


    
}
?>