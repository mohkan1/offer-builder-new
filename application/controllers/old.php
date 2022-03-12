<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class old extends CI_Controller {

	public function index()
	{
		$this->load->view('offer-builder/views/index.html');
	}	
	
}
