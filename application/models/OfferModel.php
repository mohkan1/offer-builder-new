<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferModel extends CI_Model {

        public $id;
        public $user_id;
        public $offert;
        public $json;
  
    function createOffert($data){
        
        return $this->db->insert('offerts',$data);
	}
	
    function updateOffert($data){
        $conditions = array("user_id" => $data["user_id"], "offert" => $data["offert"]);
        
        $this->json = $data["json"];
        $this->db->where($conditions)->update("offerts", $data["json"]);
        
        return true;
    }
	    
    public function getData($data){
        
        $conditions = array("name" => $data["name"], "offert" => $data["offert"]);
        $this->db->select('json')->from('offerts')->where($conditions);
    
        $query = $this->db->get();
    
        if ( $query->num_rows() > 0 ){
            $row = $query->row_array();
            return $row;
        }
    
    }
    
    public function getUserID($data){
        
        $conditions = array("first_name" => $data["first_name"], "last_name" => $data["last_name"]);
        $this->db->select('id')->from('users')->where($conditions);
    
        $query = $this->db->get();
    
        return $query->result();
    
    }
    
    public function getUserPersmission($data){
        
        $conditions = array("user_id" => $data["id"]);
        $this->db->select('group_id')->from('users_groups')->where($conditions);
    
        $query = $this->db->get();
    
        return $query->result();
    
    }
    
    public function checkIfOfferNameExist($data){
        
        $conditions = array("user_id" => $data["user_id"], "offert" => $data["offert"]);
        $this->db->select('json')->from('offerts')->where($conditions);
    
        $query = $this->db->get();
    
        return $query->result();

    
    }
    
    public function getAllOffertsByOwnerID($data){
        $conditions = array("user_id" => $data["user_id"]);
        $this->db->select("*")->from('offerts')->where($conditions);
    
        $query = $this->db->get();
        return $query->result();

    
    }
    
    public function GetOfferByNameAndOfferName($data){
        $conditions = array("name" => $data["name"], "offert" => $data["offert"]);
        $this->db->select("*")->from('offerts')->where($conditions);
    
        $query = $this->db->get();
        return $query->result();

    
    }
    
}