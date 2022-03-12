<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class links extends CI_Controller {

	public function index(){}	
	
	public function Jquery(){
		return $this->load->view('form-builder-new/assets/js/jquery/jquery.js');
	
	}
	
	public function JqueryUi(){
		return $this->load->view('form-builder-new/assets/js/jquery/jquery-ui.min.js');
	
	}
	
	public function jqSignatureMin(){
		return $this->load->view('form-builder-new/assets/js/jquery/jq-signature.min.js');
	
	}
	
	public function bootstrapInCss(){
    		return $this->load->view('form-builder-new/assets/css/bootstrap/bootstrap.min.css');
	
	}
	
	public function popperMin(){
		return $this->load->view('form-builder-new/assets/js/popper/popper.min.js');
	
	}
	
	public function bootstrapInJs(){
		return $this->load->view('form-builder-new/assets/js/bootstrap/bootstrap.min.js');
	
	}
	
	public function main(){
		return $this->load->view('form-builder-new/assets/js/form-builder/main.js');
	
	}
	
	public function builder(){
		return $this->load->view('form-builder-new/assets/css/builder.css');
	
	}
}
