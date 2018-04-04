<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("common");
        $this->load->model("search");
        $this->common->username = WSDL_USERNAME;
        $this->common->password = WSDL_PASSWORD;
    }

    public function index()
    {
        $this->load->view("main");
    }

    public function HotelSearch(){
        $str = isset($_POST['str']) ? $_POST['str'] : '';
        $limit = isset($_POST['limit']) ? $_POST['limit'] : 10;
        $record = $this->search->fetchbyStr($str,$limit);
        //$data = array("abc","cde","edgf","khk");
        $data = "<ul id=\"country-list\">";
        if($record == false){
            $data = '<li>No result found</li>';
        }else{
            foreach($record as $country) {
                $data .= "<li onClick='selectCountry($country->CityCode);'>";
                $data .= $country->CityName;
                $data .= "</li>";
            }
        }
        $data .= "</ul>";
        echo $data;
    }

}
