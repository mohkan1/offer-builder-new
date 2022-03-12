<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sellers extends CI_Controller {

	public function index()
	{
		$this->load->view('form-builder-new/seller.php');
	}	
	
}
