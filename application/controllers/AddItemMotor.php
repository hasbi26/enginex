<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddItemMotor extends CI_Controller {
    public function __construct(){
         parent::__construct();

         $this->load->model('Motor_model');
    }



    private function upload_foto($field_name, $np, $id = '' )
    {
        $field_name = trim($field_name);
        
        $name = $np.$field_name.".jpg";
        
        
        if (!empty($_FILES[$field_name]['name'])) {
            $config['upload_path'] = './assets/images/Motor';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 2048000;
            $config['file_name'] = $name;
            $config['overwrite'] = TRUE;

            
            // var_dump("ada".$name);
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload($field_name)) {
                $error = array('error' => $this->upload->display_errors());
                
                var_dump("Sini".$this->upload->display_errors());
                // $this->load->view('Motor/edit', $error);
            } else {
                $old_foto = $this->Motor_model->get_foto_by_id($id, $field_name);
                if (!empty($old_foto)) {
                    unlink('./assets/images/Motor' . $old_foto);
                    var_dump("keSini");
                }
                if (!$this->upload->do_upload($field_name)) {
                    var_dump("tes",$this->upload->display_errors());
                    die;
                    
                } else {
                    
                    var_dump("tidak error".$field_name);
                    return $this->upload->data($field_name);
                    // return $this->upload->do_upload($field_name);

                }



            }
        } else {
            var_dump("ataukeSini");
            return $this->Motor_model->get_foto_by_id($id, $field_name);
            
        }
        var_dump("kesSinigtu");
    }

    function simpanMotor()
    {

        $trim = str_replace("_",".",$_FILES['fotodepan']['name']); 
        

        $np = $this->input->post('nopol');
        $dpan = $np.$trim;

        

        $config['upload_path']="./assets/images/Motor";
        $config['allowed_types']='jpg|png';

        $config['overwrite'] = TRUE;
        $config['max_size'] = 2048000;
        $config['file_name'] = $dpan;

        $this->load->library('upload', $config);

        
       
        if (!$this->upload->do_upload('fotodepan')) {

            var_dump("tes",$this->upload->display_errors());
            die;
            // $error = array('error' => $this->upload->display_errors());
            // $this->load->view('Motor/create', $error);
        } else {


            $data = array(
                'namaItem'=>$this->input->post('namabarang'),
                'tahun'=>$this->input->post('tahun'),
                'harga'=>$this->input->post('harga'),
                'merk'=>$this->input->post('merk'),
                'jenis'=>$this->input->post('jenis'),
                'volume_mesin'=>$this->input->post('volume_mesin'),
                'model'=>$this->input->post('model'),
                'bahanbakar'=>$this->input->post('bahanbakar'),
                'transmisi'=>$this->input->post('transmisi'),
                'warna'=>$this->input->post('warna'),
                'nopol'=>$this->input->post('nopol'),
                'kilometer'=>$this->input->post('kilometer'),
                'ac'=>$this->input->post('ac'),
                'powersteering'=>$this->input->post('powersteering'),
                'powerwindow'=>$this->input->post('powerwindow'),
                'centrallock'=>$this->input->post('centrallock'),
                'alarm'=>$this->input->post('alarm'),
                'kondisi'=>$this->input->post('kondisi'),
                'status'=>$this->input->post('status'),
                'deskripsi'=>$this->input->post('deskripsi'), 
                'fotodepan'=>$np.$_FILES['fotodepan']['name'],
                'fotobelakang' =>$this->upload_foto('fotobelakang',$np),
                'fotokanan' =>  $this->upload_foto('fotokanan',$np),
                'fotokiri' => $this->upload_foto('fotokiri',$np),
                'fotodalam1' => $this->upload_foto('fotodalam1',$np),
                'fotodalam2' => $this->upload_foto('fotodalam2',$np),
                'fotomesin1' => $this->upload_foto('fotomesin1',$np),
                'fotomesin2' => $this->upload_foto('fotomesin2',$np),
    
            );
                $this->db->insert('t_Motor',$data);
        }


    }


    public function create(){
    // get data from ajax formdata

  $namaItem = $this->input->post('namabarang');
  $tahun = $this->input->post('tahun');
  $harga = $this->input->post('harga');
  $merk = $this->input->post('merk');
  $model = $this->input->post('model');
  $pajak = $this->input->post('pajak');
  $volume_mesin = $this->input->post('volume_mesin');
  $warna = $this->input->post('warna');
  $nopol = $this->input->post('nopol');
  $kilometer = $this->input->post('kilometer');

  $deskripsi = $this->input->post('deskripsi');

  $path = "./assets/images/Motor/".$nopol;

  

  if(!is_dir($path)) //create the folder if it's not exists
  {
    mkdir($path,0755,TRUE);
  }

    $fotodepan = $this->upload_image('fotodepan', $path);
    $fotobelakang = $this->upload_image('fotobelakang', $path);
    $fotokanan = $this->upload_image('fotokanan', $path);
    $fotokiri = $this->upload_image('fotokiri', $path);
    $fotolain = $this->upload_image('fotolain', $path);
    // save data to database
    $data = array(
        'namaItem'=>$namaItem,
        'tahun'=>$tahun,
        'harga'=>$harga,
        'merk'=>$merk,
        'pajak'=>$pajak,
        'volume_mesin'=>$volume_mesin,
        'model'=>$model,
        'warna'=>$warna,
        'nopol'=>$nopol,
        'kilometer'=>$kilometer,
        'harga' => $harga,
        'deskripsi' => $deskripsi,
        'fotobelakang' => $fotobelakang,
        'fotodepan' => $fotodepan,
        'fotokanan' => $fotokanan,
        'fotokiri' => $fotokiri,
        'fotolain' => $fotolain,
    );
    $this->db->insert('t_Motor', $data);

    // return response to ajax
    echo json_encode(array('status' => 'success', 'message' => 'Data berhasil disimpan'));
}


// private function upload_image($field_name, $path, $file_name)
// {
//     if (!empty($_FILES[$field_name]['name'])) {
//         $config['upload_path'] = $path;
//         $config['allowed_types'] = 'gif|jpg|png';
//         $config['max_size'] = 2048;
//         $config['file_name'] = $file_name;    
//         $this->load->library('upload', $config);
//         if (!$this->upload->do_upload($field_name)) {
//             return '';
//         } else {
//             $upload_data = $this->upload->data();
//             var_dump("upload data", $upload_data);
//             return $file_name;
//         }
        
//     } else {
//         return '';
//     }
// }

private function upload_image($field_name, $path)
{
    // $namaItem = $this->input->post('namabarang');
    // $file_name = $namaItem . '_' . $field_name;

    if (!empty($_FILES[$field_name]['name'])) {
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = $this->input->post('nopol'). "_foto";
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($field_name)) {
            return '';
        } else {
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
        }
    } else {
        return '';
    }
}






}