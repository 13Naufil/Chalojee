<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->helper('temp_helper');
        $this->load->library("search");
        $this->load->model("destination");
        $this->load->model("notifications");
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
        $data = "<ul id=\"country-list\">";
        if($record == false){
            $data = '<li>No result found</li>';
        }else{
            foreach($record as $country) {
                $data .= "<li onClick=\"selectCountry($country->CityCode,'$country->CityName');\">";
                $data .= $country->CityName;
                $data .= "</li>";
            }
        }
        $data .= "</ul>";
        echo $data;
    }

    public function Search()
    {
        $CityId = isset($_POST['search_id']) ? $_POST['search_id'] : '';
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

        if($CityId != ''):

        $notification = $this->notifications->fetchbyid($CityId);

        $data = array();

        if($child == 0)
        {
            $response = $this->search->HotelSearch($CheckInDate,$CheckOutDate,$CountryName,$CityName,$CityId,$IsNearBySearchAllowed,$NoOfRooms,$GuestNationality,$RoomGuests,$ResultCount,$Filters);
            if($response[0]['HotelSearchResponse']['Status']['StatusCode'] == 1)
            {
                $data = array('StatusCode'=>$response[0]['HotelSearchResponse']['Status']['StatusCode'],'data'=>$response[0],'home'=>'home-bg','notification'=>$notification);

            }
            else
            {
                $data = array('StatusCode'=>$response[0]['HotelSearchResponse']['Status']['StatusCode'],'data'=>'','home'=>'home-bg','notification'=>$notification);
            }
        }
        else
        {
            echo "child age";
        }

        $this->load->view("listing/main",$data);


        endif;
    }

    public function Detail()
    {
        $SessionId = isset($_POST['SessionId']) ? $_POST['SessionId'] : '';
        $ResultIndex = isset($_POST['ResultIndex']) ? $_POST['ResultIndex'] : 0;
        $HotelCode = isset($_POST['HotelCode']) ? $_POST['HotelCode'] : 0;
        $CheckInDate = isset($_POST['CheckInDate']) ? $_POST['CheckInDate'] : '';
        $CheckOutDate = isset($_POST['CheckOutDate']) ? $_POST['CheckOutDate'] : '';
        $TripAdvisorRating = isset($_POST['TripAdvisorRating']) ? $_POST['TripAdvisorRating'] : '';
        $TripAdvisorReviewURL = isset($_POST['TripAdvisorReviewURL']) ? $_POST['TripAdvisorReviewURL'] : '';
        $Rating = isset($_POST['Rating']) ? $_POST['Rating'] : '';




        if($SessionId != '' && $ResultIndex != 0 && $HotelCode != 0)
        {
            $response = $this->search->HotelDetails($SessionId,$ResultIndex);
            if($response[0]['HotelDetailsResponse']['Status']['StatusCode'] == 1)
            {

               // print_r($response);


                $room_details = $this->search->AvailableHotelRooms($SessionId,$ResultIndex,$HotelCode);
               /* print_r($room_details);
                exit;*/
                $data = array('data'=>$response[0]['HotelDetailsResponse'],'room_details'=>$room_details[0]['HotelRoomAvailabilityResponse'],'Rating'=>$Rating,'TripAdvisorRating'=>$TripAdvisorRating,'TripAdvisorReviewURL'=>$TripAdvisorReviewURL,'CheckInDate'=>$CheckInDate,'CheckOutDate'=>$CheckOutDate,'SessionId'=>$SessionId,'ResultIndex'=>$ResultIndex,'message'=>'Fetch Data Successfully','home'=>'inner-bg');
            }
        }
        else
        {
            $data = array('data'=>'','message'=>'Session Expires','home'=>'inner-bg');
        }
        $this->load->view("detail/detail",$data);
    }

}
