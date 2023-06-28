<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Motor_model extends CI_Model {
     function getItem(){

          $this->db->select('*');
          $records = $this->db->get('t_motor');
          $Item = $records->result_array();
          return $Item;
     }
     function getItemDetails($postData=array()){
 
          $response = array();

          if(isset($postData['id']) ){
 
               // Select record
               $this->db->select('*');
               $this->db->where('id', $postData['id']);
               $records = $this->db->get('t_motor');
               $response = $records->result_array();


 
          }

 
          return $response;
     }

     function getItemByid($postData=array()){
 
          $response = array();
          if(isset($postData) ){
 
               // Select record
               $this->db->select('*');
               $this->db->where('id', $postData);
               $records = $this->db->get('t_motor');
               $response = $records->result_array();


 
          }

 
          return $response;
     }


     public function get_foto_by_id($id)
     {
         $query = $this->db->get_where('t_motor', array('id' => $id));

         return $query->row();
     }

     public function delete($id) {
          $this->db->where('id', $id);
          $this->db->delete('t_motor');
          return $this->db->affected_rows() > 0;
      }
      
 
      function getSearch($search){
          $response = array();

          // Select record
          $this->db->select('*');
          $this->db->like('merk', $search); // Mencari berdasarkan kolom 'merk'
          $this->db->or_like('namaItem', $search); // Mencari berdasarkan kolom 'namaItem'
          $this->db->or_like('tahun', $search); // Mencari berdasarkan kolom 'tahun'
          $records = $this->db->get('t_motor');
          $response = $records->result_array();
          return $response;
     }


     function GetSort($kat, $sort){
          $response = array();

          // Select record
          $this->db->select('*');
          $this->db->order_by($kat, $sort); // Menggunakan nilai $asc untuk menentukan arah pengurutan
          $records = $this->db->get('t_motor');
          $response = $records->result_array();
          
          return $response;
     }

}