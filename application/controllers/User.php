<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
    
       parent::__construct();
    
       // load base_url
        $this->load->helper('url');
    	$this->load->database();
    	$this->load->model('OfferModel');
    }
    
    public function index(){
    
       $this->load->view('user_view');
     
    }
    
    public function saveJson(){
                
     $data = $this->input->post();
     $data = json_decode($data["code"], true);
     echo json_encode($data["elements"]);
    
    }
    
    public function getJson(){
        $json = array(
        "name"=>"MohammadKanjo",
        );
        
        echo json_encode($json);
    }
    
    public function getMainOffer(){
        
        $input = $this->input->post();

        $data["name"] = $input["name"];
        $data["offert"] = $input["offert"];
        
        $response=$this->OfferModel->getData($data);
		if($response){
            echo json_encode($response);
        }
        else{
            echo false;
        }
    }
    
    public function updateOffert(){
        
        $input = $this->input->post();

        $data["user_id"] = $input["user_id"];
        $data["offert"] = $input["offert"];
        $data["json"] = $input["json"];
        
        $response=$this->OfferModel->updateOffert($data);
		if($response){
            echo true;
        }
        else{
            echo false;
        }
    }

    public function getAllOffertsByOwnerID(){
        
        $input = $this->input->post();

        $data["user_id"] = $input["user_id"];
        
        $response=$this->OfferModel->getAllOffertsByOwnerID($data);
		if($response){
            echo json_encode($response);
        }
        else{
            echo false;
        }
        
    }
    
    // public function getUserID(){
        
    //     $input = $this->input->post();
        
    //     $data["first_name"] = $input["first_name"];
    //     $data["last_name"] = $input["last_name"];
        

    //     $response=$this->OfferModel->getUserID($data);
	// 	if($response){
    //         echo json_encode($response);
    //     }
    //     else{
    //         echo "false";
    //     }
    // }
        
    public function getUserPermissionID(){
        
        $input = $this->input->post();
        $sql = $this->db->query(
        'SELECT 
            group_id
        FROM 
            users_groups
        LEFT JOIN 
            users
        ON 
            user_id = users.id
        WHERE
            users.id = '.$input["id"].'
            LIMIT 1
        '
        );
    
        if($sql->num_rows()){
            echo $sql->result()[0]->group_id;
        }
            
   
    }
    
    
    public function getUserPersmission(){
        
        $input = $this->input->post();
        
        $data["id"] = $input["id"];
        

        $response=$this->OfferModel->getUserPersmission($data);
		if($response){
            echo json_encode($response);
        }
        else{
            echo "false";
        }
    }

    
    public function GetOfferByNameAndOfferName(){
        
        $input = $this->input->post();

        $data["name"] = $input["name"];
        $data["offert"] = $input["offert"];

        $response=$this->OfferModel->GetOfferByNameAndOfferName($data);
		if($response){
            echo json_encode($response);
        }
        else{
            echo false;
        }
    }
    
    public function checkIfOfferNameExist(){
        
        $input = $this->input->post();

        $data["user_id"] = $input["user_id"];
        $data["offert"] = $input["offert"];

        $response=$this->OfferModel->checkIfOfferNameExist($data);
		echo json_encode($response);
    }
    
    public function createOffert(){
        $input = $this->input->post();

        $data["user_id"] = $input["user_id"];
        $data["offert"] = $input["offert"];
        $data["json"] = $input["json"];
        
        $response=$this->OfferModel->createOffert($data);
		if($response){
            echo "offer created";
        }
        else{
            echo "offer has not been created";
        }
    }
}

 // $data = $this->input->post();
    //     // Read POST data
    //    //  echo "<b>Name :</b> ".$postData['txt_name']."<br/>";
    //    //  echo "<b>Username :</b> ".$postData['txt_uname']."<br/>";
    //    //  echo "<b>Email :</b> ".$postData['txt_email']."<br/>";
       
    //    return "<b>Email :</b> ".$postData['test']."<br/>";