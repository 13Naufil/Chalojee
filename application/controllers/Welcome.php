<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library("search");
		$this->load->model("destination");
		$this->search->username = WSDL_USERNAME;
		$this->search->password = WSDL_PASSWORD;
	}

	public function index()
    {
        //$this->search->add(array('abc'=>123,'cde'=>33));
       //$this->DestinationCities();

    //  echo "123"; exit;
        $this->test();

	}

    public function test()
    {
            $response = $this->search->HotelSearch("2018-06-16","2018-06-22","United Arab Emirates","Abu Dhabi","115936","false",1,"IN",array('AdultCount'=>2,'ChildCount'=>0),10,array('StarRating'=>'All','OrderBy'=>'PriceAsc'));
        print_r($response); exit;
    }

	public function DestinationCities(){
        $countries = $this->common->CountryList()[0];

        if(!empty($countries['CountryListResponse']))
        {
            $arr = array();
            
            if($countries['CountryListResponse']['Status']['StatusCode'] == 1){
                foreach ($countries['CountryListResponse']['CountryList']['Country'] as $key => $data)
                {
                    $cityList = $this->common->DestinationCityList($data['@attributes']['CountryCode'])[0];

                    if(!empty($cityList['DestinationCityListResponse'])) {
                        if ($cityList['DestinationCityListResponse']['Status']['StatusCode'] == 1) {
                            foreach ($cityList['DestinationCityListResponse']['CityList']['City'] as $key2 => $cities) {

                                if(isset($cities['@attributes']['CityCode']) && isset($cities['@attributes']['CityName']) && isset($cityList['DestinationCityListResponse']['CountryName'])){
                                    $arr[] = array('CityCode' => $cities['@attributes']['CityCode'], 'CityName' => $cities['@attributes']['CityName']. " , " . $cityList['DestinationCityListResponse']['CountryName']);
                                    $data = array('CityCode' => $cities['@attributes']['CityCode'],'City' => $cities['@attributes']['CityName'],'Country' => $cityList['DestinationCityListResponse']['CountryName'], 'CityName' => $cities['@attributes']['CityName']. " , " . $cityList['DestinationCityListResponse']['CountryName']);
                                    //$this->destination->add($data);
                                }
                            }
                        }

                    }

                }
                echo json_encode($arr);
            }
        }
    }





}
