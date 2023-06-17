<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load Model
		// $this->load->model('Mobil_model');

		// load Library user Agent
		$this->load->library('user_agent');
		// $this->load->model('Motor_model');
		// $this->load->model('Aksesoris_model');

		// Load base_url
	   //  $this->load->helper('url');
   }

	public function index()
	{
		if($this->agent->is_mobile()){
			$this->load->view('mobile/luar');
		}else{
			$this->load->view('luar');
		}
		
	}

	public function detailProduct ($url=null)
	{
		$id = $this->uri->segment('3');
		$param = $this->uri->segment('4');

		$data['item'] = $this->Mobil_model->getItemByid($id);
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
	



	
		// pengecekan jika website di bukan dari HP atau PC
		if($this->agent->is_mobile()){
			$this->load->view('mobile/detail', $data);

		}else{
			$this->load->view('detail', $data);
		}
		
	}
}
