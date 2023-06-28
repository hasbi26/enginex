<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetItem extends CI_Controller {
    public function __construct(){
         parent::__construct();

         // Load Model
         $this->load->model('Mobil_model');
         $this->load->model('Motor_model');
         $this->load->model('Aksesoris_model');

         // Load base_url
        //  $this->load->helper('url');
    }
    public function index(){
     $postData = $this->input->post('postdata');

     if($postData == 'Mobil') {
         $Item = $this->Mobil_model->getItem();
     } elseif($postData == 'Motor') {
         $Item = $this->Motor_model->getItem();
     } elseif($postData == 'Aksesoris') {
         $Item = $this->Aksesoris_model->getItem();
     } else {
         $Item = array(); // default empty array
     }
 
     $data['Item'] = $Item;
 
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


public function Aksesoris(){
     $Item = $this->Aksesoris_model->getItem();

     $data['Item'] = $Item;

    //  $this->load->view('dashboard',$data);
     echo json_encode($data);
}

public function AksesorisDetail(){
     $postData = $this->input->post();

     $data = $this->Aksesoris_model->getItemDetails($postData);

     echo json_encode($data);
}

public function MobilSorting(){
    // $postData = $this->input->post();

    $kat = $this->input->post('kat'); // Ambil nilai tahun dari request
    $sort = $this->input->post('sort'); // Ambil nilai asc dari request

    $data = $this->Mobil_model->GetItemSorting($kat, $sort);
   
    echo json_encode($data);
}

public function WithSearch(){

    $param = $this->input->post('param'); // Ambil nilai tahun dari request
    $search = $this->input->post('search'); // Ambil nilai asc dari request

    if($param == 'Mobil') {
        $Item = $this->Mobil_model->getSearch($search);
    } elseif($param == 'Motor') {
        $Item = $this->Motor_model->getSearch($search);
    } elseif($param == 'Aksesoris') {
        $Item = $this->Aksesoris_model->getSearch($search);
    } else {
        $Item = array(); // default empty array
    }
    echo json_encode($Item);
}


public function Sorting(){

    $param = $this->input->post('param'); // Ambil nilai tahun dari request
    $sort_type = $this->input->post('sort'); // Ambil nilai asc dari request

    
    $kat = explode("_",$sort_type)[0];
    $sort = explode("_",$sort_type)[1];


    if($param == 'Mobil') {
        $Item = $this->Mobil_model->GetSort($kat, $sort);
    } elseif($param == 'Motor') {
        $Item = $this->Motor_model->GetSort($kat, $sort);
    } elseif($param == 'Aksesoris' || $param == "Accessories") {
        $Item = $this->Aksesoris_model->GetSort($kat, $sort);
    } else {
        $Item = array(); // default empty array
    }

    echo json_encode($Item);
}




}