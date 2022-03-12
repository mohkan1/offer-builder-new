<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller {

    public function __construct() {
    
       parent::__construct();
    
       // load base_url
       $this->load->helper('url');
    }
    
    public function index(){
        

        if($this->input->post()){
            echo "data recived";
        }else{
            echo "Bad news";
        }
        
        
    }
}