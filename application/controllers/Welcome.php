<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		//$this->load->library("common");
		$this->load->model("search");
		$this->common->username = WSDL_USERNAME;
		$this->common->password = WSDL_PASSWORD;
	}

	public function index()
    {
        //$this->search->add(array('abc'=>123,'cde'=>33));
       $data = $this->DestinationCities();

      print_r($data); exit;

	}


	public function DestinationCities(){
        $countries = $this->common->CountryList()[0];


        if(!empty($countries['CountryListResponse']))
        {
            $arr = array();
            $arr2 = array();
            if($countries['CountryListResponse']['Status']['StatusCode'] == 1){
                foreach ($countries['CountryListResponse']['CountryList']['Country'] as $key => $data)
                {
                    $cityList = $this->common->DestinationCityList($data['@attributes']['CountryCode'])[0];

                    if(!empty($cityList['DestinationCityListResponse'])) {
                        if ($cityList['DestinationCityListResponse']['Status']['StatusCode'] == 1) {
                            foreach ($cityList['DestinationCityListResponse']['CityList']['City'] as $key2 => $cities) {
                                $arr[] = array('CityCode' => isset($cities['@attributes']['CityCode']) ? $cities['@attributes']['CityCode'] : 0, 'CityName' => $cities['@attributes']['CityName'] . " , " . $cityList['DestinationCityListResponse']['CountryName']);
                                //$data = array('CityCode'=> (isset($cities['@attributes']['CityCode']) != null ? $cities['@attributes']['CityCode'] : 0),'CityName'=>$cities['@attributes']['CityName']." , ".$cityList['DestinationCityListResponse']['CountryName']);

                                //$this->search->add($data);
                            }
                        }

                    }

                }print_r($arr);exit;
               // return $arr;
            }
        }
    }





}
