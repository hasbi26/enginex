<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetItem extends CI_Controller {
    public function __construct(){
         parent::__construct();

         // Load Model
         $this->load->model('Mobil_model');

         // Load base_url
        //  $this->load->helper('url');
    }
    public function index(){
         $Item = $this->Mobil_model->getItem();

         $data['Item'] = $Item;

        //  $this->load->view('dashboard',$data);
         echo json_encode($data);
    }

    public function userDetails(){
         // POST data
         $postData = $this->input->post();

         // get data
         $data = $this->Main_model->getItemDetails($postData);

         echo json_encode($data);
    }


    public function getDetail(){
     $postData = $this->input->post();

     $data = $this->Mobil_model->getItemDetails($postData);

     echo json_encode($data);
}

}