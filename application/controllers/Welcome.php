<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library("common");
		$this->common->username = WSDL_USERNAME;
		$this->common->password = WSDL_PASSWORD;
	}

	public function index()
	{

		

		$data = $this->common->CountryList();
print_r($data);
		exit;
		//$this->load->view('welcome_message');
	}
}
