<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library("common");
		$this->load->model("search");
		$this->common->username = WSDL_USERNAME;
		$this->common->password = WSDL_PASSWORD;
	}

	public function index()
    {
        //$this->search->add(array('abc'=>123,'cde'=>33));
       //$data = $this->DestinationCities();

      echo "123"; exit;

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
