<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //$this->load->library("common");
        $this->load->library("search");
        $this->load->model("destination");
        $this->search->username = WSDL_USERNAME;
        $this->search->password = WSDL_PASSWORD;
    }

    public function index()
    {
        $data = array('home'=>'home');
        $this->load->view("main",$data);

    }

    public function HotelSearch(){
        $str = isset($_POST['str']) ? $_POST['str'] : '';
        $limit = isset($_POST['limit']) ? $_POST['limit'] : 10;
        $record = $this->destination->fetchbyStr($str,$limit);
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

    public function Search()
    {
        $CityId = isset($_POST['search']) ? $_POST['search'] : '';
        $check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
        $check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';
        $NoOfRooms = isset($_POST['rooms']) ? $_POST['rooms'] : 1;
        $adult = isset($_POST['adult']) ? $_POST['adult'] : 1;
        $child = isset($_POST['child']) ? $_POST['child'] : 0;
        $child_age = isset($_POST['child_age']) ? $_POST['child_age'] : 0;

        $data = $this->destination->fetchbyid($CityId)[0];

        $RoomGuests = array('AdultCount'=>$adult,'ChildCount'=>$child);
        $Filters = array('StarRating'=>'All','OrderBy'=>'PriceAsc');
        $IsNearBySearchAllowed = "false";
        $GuestNationality = "IN";
        $ResultCount = 10;


        $CheckInDate = date("Y-m-d", strtotime($check_in));
        $CheckOutDate = date("Y-m-d", strtotime($check_out));


        $CountryName = $data->Country;
        $CityName = $data->City;

        $data = array();

        if($child == 0)
        {
            $response = $this->search->HotelSearch($CheckInDate,$CheckOutDate,$CountryName,$CityName,$CityId,$IsNearBySearchAllowed,$NoOfRooms,$GuestNationality,$RoomGuests,$ResultCount,$Filters);
            if($response[0]['HotelSearchResponse']['Status']['StatusCode'] == 1)
            {
                $data = array('StatusCode'=>$response[0]['HotelSearchResponse']['Status']['StatusCode'],'data'=>$response[0],'home'=>'home-bg');

            }
            else
            {
                $data = array('StatusCode'=>$response[0]['HotelSearchResponse']['Status']['StatusCode'],'data'=>'','home'=>'home-bg');
            }
        }
        else
        {
            echo "child age";
        }

        $this->load->view("listing/main",$data);
    }

    public function Detail()
    {
        $SessionId = isset($_POST['SessionId']) ? $_POST['SessionId'] : '';
        $ResultIndex = isset($_POST['ResultIndex']) ? $_POST['ResultIndex'] : 0;

        if($SessionId != '' && $ResultIndex != 0)
        {
            $response = $this->search->HotelDetails($SessionId,$ResultIndex);
            $data = array('data'=>$response[0],'message'=>'Fetch Data Successfully','home'=>'inner-bg');
        }
        else
        {
            $data = array('data'=>'','message'=>'Session Expires','home'=>'inner-bg');
        }
        $this->load->view("detail/detail",$data);
    }

}
