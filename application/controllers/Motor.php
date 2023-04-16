<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {


    public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('motor');
	}


	public function update(){
		// get data from ajax formdata
		$id = $this->input->post('eid');
		$namaItem = $this->input->post('enamabarang');
		$nopol = $this->input->post('enopol');
		$tahun = $this->input->post('etahun');
		$harga = $this->input->post('eharga');
		$merk = $this->input->post('emerk');
		$model = $this->input->post('emodel');
		$pajak = $this->input->post('epajak');
		$volume_mesin = $this->input->post('evolume_mesin');
		$warna = $this->input->post('ewarna');
		$kilometer = $this->input->post('ekilometer');
		$deskripsi = $this->input->post('edeskripsi');
	
		// get existing data
		$existing_data = $this->db->get_where('t_Motor', array('id_motor' => $id))->row();


	
		// handle image upload
		$fotodepan = $existing_data->fotodepan;
		$fotobelakang = $existing_data->fotobelakang;
		$fotokanan = $existing_data->fotokanan;
		$fotokiri = $existing_data->fotokiri;
		$fotolain = $existing_data->fotolain;
	
		if (!empty($_FILES['fotodepan']['name'])) {
			$fotodepan = $this->upload_image('fotodepan', $existing_data->$nopol);
		}
	
		if (!empty($_FILES['fotobelakang']['name'])) {
			$fotobelakang = $this->upload_image('fotobelakang', $existing_data->$nopol);
		}
	
		if (!empty($_FILES['fotokanan']['name'])) {
			$fotokanan = $this->upload_image('fotokanan', $existing_data->$nopol);
		}
	
		if (!empty($_FILES['fotokiri']['name'])) {
			$fotokiri = $this->upload_image('fotokiri', $existing_data->$nopol);
		}
	
		if (!empty($_FILES['fotolain']['name'])) {
			$fotolain = $this->upload_image('fotolain', $existing_data->$nopol);
		}
	
		// update data to database
		$data = array(
			'namaItem'=>$namaItem,
			'tahun'=>$tahun,
			'harga'=>$harga,
			'merk'=>$merk,
			'pajak'=>$pajak,
			'volume_mesin'=>$volume_mesin,
			'model'=>$model,
			'warna'=>$warna,
			'kilometer'=>$kilometer,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			'nopol' => $nopol,
			'fotobelakang' => $fotobelakang,
			'fotodepan' => $fotodepan,
			'fotokanan' => $fotokanan,
			'fotokiri' => $fotokiri,
			'fotolain' => $fotolain,
		);
		$this->db->where('id_motor', $id);
		$this->db->update('t_Motor', $data);
	
		// return response to ajax
		echo json_encode(array('status' => 'success', 'message' => 'Data berhasil diupdate'));
	}
	
}