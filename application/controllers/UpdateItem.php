<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateItem extends CI_Controller {


    public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}

        $this->load->model('Aksesoris_model');

	}



    private function upload_image($field_name, $path, $userFile)
	{

			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 150238;								   			
			// $config['file_name'] = $field_name;
			$config['file_name'] = $this->input->post('enamabarang'). "_foto";
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload($userFile)) {

				$error = array('error' => $this->upload->display_errors());
				return '';
			} else {
				$upload_data = $this->upload->data();
				return $upload_data['file_name'];
			}
		
	} 

    public function Aksesoris(){

            // get data from ajax formdata
            $id = $this->input->post('eid');
            $namaItem = $this->input->post('enamabarang');
            $qty = $this->input->post('eqty');
            $merk = $this->input->post('emerk');
            $jenis = $this->input->post('ejenis');
            $harga = $this->input->post('eharga');
            $keterangan = $this->input->post('eketerangan');
            $deskripsi = $this->input->post('edeskripsi');
    
    
        
            // get existing data
            $existing_data = $this->db->get_where('t_aksesoris', array('id' => $id))->row();
    
        
            // handle image upload
            $foto1 = $existing_data->foto1;
            $foto2 = $existing_data->foto2;
            $foto3 = $existing_data->foto3;
 
            $path = "./assets/images/Aksesoris/".$namaItem.'/' ;
    
            if (!empty($_FILES['efoto1']['name'])) {
                unlink(FCPATH . $path . $foto1);
                $foto1 = $this->upload_image('foto1', $path, 'efoto1'); 
            }
        
            if (!empty($_FILES['efoto2']['name'])) {
                unlink(FCPATH . $path . $foto2);
                $foto2 = $this->upload_image('foto2', $path, 'efoto2');
            }
        
            if (!empty($_FILES['efoto3']['name'])) {
                unlink(FCPATH . $path . $foto3);
                $foto3 = $this->upload_image('foto3', $path, 'efoto3');
            }
        
            // update data to database
            $data = array(
                'namaItem'=>$namaItem,
                'qty'=>$qty,
                'harga'=>$harga,
                'merk'=>$merk,
                'jenis'=>$jenis,
                'keterangan'=>$keterangan,
                'deskripsi' => $deskripsi,
                'foto1' => $foto1,
                'foto2' => $foto2,
                'foto3' => $foto3,

            );
            $this->db->where('id', $id);
            $this->db->update('t_aksesoris', $data);
        
            // return response to ajax
            echo json_encode(array('status' => 'success', 'message' => 'Data berhasil diupdate'));

    }


}