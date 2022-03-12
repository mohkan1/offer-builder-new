<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferBuilder extends CI_Controller {

	public function index()
	{
		$this->load->view('form-builder-new/index.php');
	}	
	
}
