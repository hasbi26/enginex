<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct(){
		parent::__construct();

		// Load Model
		$this->load->model('Mobil_model');

		// Load base_url
	   //  $this->load->helper('url');
   }

	public function index()
	{
		$this->load->view('luar');
	}

	public function detailProduct ($url=null)
	{

		$id = $this->uri->segment('3');

		$data['item'] = $this->Mobil_model->getItemByid($id);
		
		$this->load->view('detail', $data);
	}
}
