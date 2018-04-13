<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $check = isset($this->session->userdata['logged_in']) ? 1 : 0;
        if($check == 1){

        }else{
            redirect('/account', 'refresh');
        }
    }
    public function index()
    {
        $data = array('home'=>'home-bg','login'=>true);
        $this->load->view("booking/index",$data);
    }



}
