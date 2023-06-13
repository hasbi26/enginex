<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteItem extends CI_Controller {
    public function __construct(){
         parent::__construct();

         $this->load->model('Mobil_model');
         $this->load->model('Motor_model');
         $this->load->model('Aksesoris_model');
    }




    public function delete() {
        $id = $this->input->post('id');
        $firstPath = 'assets/images/Mobil/';
        $pathFolder = $this->input->post('nopol');
        $finalPath = $firstPath.$pathFolder;

        $this->load->helper("file"); 

        try {
            delete_files($finalPath, true);
            rmdir($finalPath);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
        
          
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


        try {
            delete_files($finalPath, true);
            rmdir($finalPath);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
 
          
        $result = $this->Motor_model->delete($id);
        if ($result) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function deleteAksesoris() {
        $id = $this->input->post('id');
        $firstPath = 'assets/images/Aksesoris/';
        $pathFolder = $this->input->post('nopol');
        $finalPath = $firstPath.$pathFolder;

        $this->load->helper("file"); // load the helper


        try {
            delete_files($finalPath, true);
            rmdir($finalPath);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
 
          
        $result = $this->Aksesoris_model->delete($id);
        if ($result) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }


}