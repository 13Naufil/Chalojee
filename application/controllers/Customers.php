<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer');
        /*$check = isset($this->session->userdata['logged_in']) ? 1 : 0;
        if($check == 1){
            $this->load->model('division');
        }else{
            redirect('Users/login', 'refresh');
        }*/
    }
    public function index()
    {
        $data = array('home'=>'home-bg','login'=>true);
        $this->load->view("customers/index",$data);
    }

    public function register()
    {
        $this->form_validation->set_rules('Title', 'Title', 'trim|required');
        $this->form_validation->set_rules('FirstName', 'First Name', 'trim|required');
        $this->form_validation->set_rules('LastName', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('Age', 'Age', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required');
        $this->form_validation->set_rules('AddressLine1', 'Address Line 1', 'trim|required');
        $this->form_validation->set_rules('AddressLine2', 'Address Line2', 'trim');
        $this->form_validation->set_rules('PhoneNo', 'Phone No', 'trim|required');
        $this->form_validation->set_rules('City', 'City', 'trim|required');
        $this->form_validation->set_rules('State', 'State', 'trim|required');
        $this->form_validation->set_rules('Country', 'Country', 'trim|required');
        $this->form_validation->set_rules('ZipCode', 'Zip Code', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_userdata('errors', validation_errors());
            redirect('/account', 'refresh');
        } else {
            $data = array(
                'Title' => $this->input->post('Title'),
                'FirstName' => $this->input->post('FirstName'),
                'LastName' => $this->input->post('LastName'),
                'Age' => $this->input->post('Age'),
                'Email' => $this->input->post('Email'),
                'password' => md5($this->input->post('password')),
                'AddressLine1' => $this->input->post('AddressLine1'),
                'AddressLine2' => $this->input->post('AddressLine2'),
                'CountryCode' => $this->input->post('CountryCode'),
                'AreaCode' => $this->input->post('AreaCode'),
                'PhoneNo' => $this->input->post('PhoneNo'),
                'City' => $this->input->post('City'),
                'State' => $this->input->post('State'),
                'Country' => $this->input->post('Country'),
                'ZipCode' => $this->input->post('ZipCode'),
            );

            $result = $this->customer->add($data);
            if ($result == TRUE) {
                $this->session->set_userdata('message_display', 'Your Profile Added Successfully !');
                redirect('/account', 'refresh');
            } else {
                $this->session->set_userdata('errors', 'Your email was already registered');
                redirect('/account', 'refresh');
            }

        }
    }

    public function validateuser(){
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                $this->session->set_userdata('errors', validation_errors());
                redirect('/account', 'refresh');
            }else{
                redirect('/listing', 'refresh');
            }
        } else {

            $data = array(
                'email' => $this->input->post('Email'),
                'password' => $this->input->post('password')
            );

            $result = $this->customer->login($data);

            if ($result != FALSE) {
                $session_data = array('userid' => $result[0]->id,'Email' => $result[0]->Email,'FirstName' => $result[0]->FirstName,'LastName' => $result[0]->LastName,'Age' => $result[0]->Age,'AddressLine1'=>$result[0]->AddressLine1,'AddressLine2'=>$result[0]->AddressLine2,'PhoneNo'=>$result[0]->PhoneNo,'City'=>$result[0]->City,'State'=>$result[0]->State,'Country'=>$result[0]->Country,'ZipCode'=>$result[0]->ZipCode);
                $this->session->set_userdata('logged_in', $session_data);
                redirect('/account', 'refresh');
            } else {
                $this->session->set_userdata('errors', 'Invalid Email or Password');
                redirect('/account', 'refresh');
            }
        }

    }

    public function logout() {
        $session = array('userid' =>'','Email' =>'','FirstName' =>'','LastName' =>'','Age' =>'','AddressLine1'=>'','AddressLine2'=>'','PhoneNo'=>'','City'=>'','State'=>'','Country'=>'','ZipCode'=>'');
        $this->session->unset_userdata('logged_in', $session);
        $this->session->set_userdata('message_display', 'Successfully Logout');
        redirect('/account', 'refresh');
    }



}
