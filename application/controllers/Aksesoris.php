<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksesoris extends CI_Controller {


    public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}

        $this->load->model('Aksesoris_model');

	}

    public function index()
	{
		$this->load->view('aksesoris');
	}

  public function get_data()
  {
      $aksesoris = $this->Aksesoris_model->get_datatables();
  
      $data = array();
      $no = 0;
      if (isset($_POST['start'])) {
          $no = $_POST['start'];
      }
      foreach ($aksesoris as $aksesori) {
          $no++;
          $row = array();
          $row[] = $aksesori->id;
          $row[] = $aksesori->namaItem;
          $row[] = $aksesori->qty;
          $row[] = $aksesori->harga;
          $row[] = $aksesori->merk;
        //   $row[] = $aksesori->foto2;
        //   $row[] = $aksesori->foto3;
        //   $row[] = $aksesori->deskripsi;
        //   $row[] = $aksesori->keterangan;
        //   $row[] = $aksesori->jenis;
          $data[] = $row;
      }
  
      $output = array(
          "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
          "recordsTotal" => $this->Aksesoris_model->count_all(),
          "recordsFiltered" => $this->Aksesoris_model->count_filtered(),
          "data" => $data,
      );
  
      echo json_encode($output);
    //   echo $output;
  }
  



}