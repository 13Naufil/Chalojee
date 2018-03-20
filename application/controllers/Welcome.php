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

                    if(!empty($cityList['DestinationCityListResponse'])){
                        if($cityList['DestinationCityListResponse']['Status']['StatusCode'] == 1) {
                            foreach ($cityList['DestinationCityListResponse']['CityList']['City'] as $key2 => $cities){
                                $arr[] = array('CityCode'=>$cities['@attributes']['CityCode'],'CityName'=>$cities['@attributes']['CityName']." , ".$cityList['DestinationCityListResponse']['CountryName']);
                            }
                        }
                    }
                    //print_r($arr);
                    //$arr2[] = array('array'=>$arr);

                }
                //print_r($arr2);
                //return $arr;
               //print_r($arr2);

            }
        }
    //exit;
      //  return $arr;
    }





}
