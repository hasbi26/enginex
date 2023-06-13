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

	private function upload_image($field_name, $path, $userFile)
	{

			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 150238;								   			
			// $config['file_name'] = $field_name;
			$config['file_name'] = $this->input->post('enopol'). "_foto";
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload($userFile)) {

				$error = array('error' => $this->upload->display_errors());
				return '';
			} else {
				$upload_data = $this->upload->data();
				return $upload_data['file_name'];
			}
		
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
		$existing_data = $this->db->get_where('t_Motor', array('id' => $id))->row();

	
		// handle image upload
		$fotodepan = $existing_data->fotodepan;
		$fotobelakang = $existing_data->fotobelakang;
		$fotokanan = $existing_data->fotokanan;
		$fotokiri = $existing_data->fotokiri;
		$fotolain = $existing_data->fotolain;

		$path = "./assets/images/Motor/".$nopol.'/' ;

		if (!empty($_FILES['efotodepan']['name'])) {
			unlink(FCPATH . $path . $fotodepan);
			$fotodepan = $this->upload_image('fotodepan', $path, 'efotodepan'); 
		}
	
		if (!empty($_FILES['efotobelakang']['name'])) {
			unlink(FCPATH . $path . $fotobelakang);
			$fotobelakang = $this->upload_image('fotobelakang', $path, 'efotobelakang');
		}
	
		if (!empty($_FILES['efotokanan']['name'])) {
			unlink(FCPATH . $path . $fotokanan);
			$fotokanan = $this->upload_image('fotokanan', $path, 'efotokanan');
		}
	
		if (!empty($_FILES['efotokiri']['name'])) {
			unlink(FCPATH . $path . $fotokiri);
			$fotokiri = $this->upload_image('fotokiri', $path, 'efotokiri');
		}
	
		if (!empty($_FILES['efotolain']['name'])) {
			unlink(FCPATH . $path . $fotolain);
			$fotolain = $this->upload_image('fotolain', $path, 'efotolain');
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
		$this->db->where('id', $id);
		$this->db->update('t_Motor', $data);
	
		// return response to ajax
		echo json_encode(array('status' => 'success', 'message' => 'Data berhasil diupdate'));
	}
	
}