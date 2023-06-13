<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct(){
		parent::__construct();

		// Load Model
		$this->load->model('Mobil_model');
		$this->load->model('Motor_model');
		$this->load->model('Aksesoris_model');

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
		$param = $this->uri->segment('4');

		// var_dump("param", $param);
		// die;

		// $data['item'] = $this->Mobil_model->getItemByid($id);

		if($param == 'Mobil') {
			$data['item'] = $this->Mobil_model->getItemByid($id);
		} elseif($param == 'Motor') {
			$data['item'] = $this->Motor_model->getItemByid($id);
		} elseif($param == 'Aksesoris') {
			$data['item'] = $this->Aksesoris_model->getItemByid($id);
		} else {
			$data['item'] = array(); // default empty array
		}
	



		
		$this->load->view('detail', $data);
	}
}
