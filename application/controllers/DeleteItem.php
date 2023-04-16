<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteItem extends CI_Controller {
    public function __construct(){
         parent::__construct();

         $this->load->model('Mobil_model');
         $this->load->model('Motor_model');
    }




    public function delete() {
        $id = $this->input->post('id');
        
        $data = $this->Mobil_model->getItemByid($id);



        
          unlink(FCPATH . 'assets/images/' . $data[0]["fotodepan"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotokanan"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotokiri"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotobelakang"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotodalam1"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotodalam2"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotomesin1"]);
          unlink(FCPATH . 'assets/images/' . $data[0]["fotomesin2"]);
          
        $result = $this->Mobil_model->delete($id);
        if ($result) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }


    public function deleteMotor() {
        $id = $this->input->post('id');
        $firstPath = 'assets/images/Motor/';
        $pathFolder = $this->input->post('nopol');
        $finalPath = $firstPath.$pathFolder;

        $this->load->helper("file"); // load the helper

        var_dump($finalPath);
        die;

        // delete_files($path, true)
        
        $data = $this->Motor_model->getItemByid($id);
          unlink(FCPATH . 'assets/images/Motor/' . $data[0]["fotodepan"]);
          unlink(FCPATH . 'assets/images/Motor/' . $data[0]["fotokanan"]);
          unlink(FCPATH . 'assets/images/Motor/' . $data[0]["fotokiri"]);
          unlink(FCPATH . 'assets/images/Motor/' . $data[0]["fotobelakang"]);
          unlink(FCPATH . 'assets/images/Motor/' . $data[0]["fotolain"]);
          
        $result = $this->Motor_model->delete($id);
        if ($result) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }


}