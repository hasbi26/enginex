<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobil_model extends CI_Model {
     function getItem(){

          $this->db->select('*');
          $records = $this->db->get('t_mobil');
          $Item = $records->result_array();
          return $Item;
     }
     function getItemDetails($postData=array()){
 
          $response = array();

          if(isset($postData['id']) ){
 
               // Select record
               $this->db->select('*');
               $this->db->where('id', $postData['id']);
               $records = $this->db->get('t_mobil');
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
               $records = $this->db->get('t_mobil');
               $response = $records->result_array();


 
          }

 
          return $response;
     }


     public function get_foto_by_id($id)
     {
         $query = $this->db->get_where('t_mobil', array('id' => $id));

         return $query->row();
     }

     public function delete($id) {
          $this->db->where('id', $id);
          $this->db->delete('t_mobil');
          return $this->db->affected_rows() > 0;
      }
      
 

}