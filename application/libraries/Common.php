<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH.'/libraries/Curl.php');


class Common extends Curl {

	public $username;
	public $password;

    public function CountryList()
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/CountryList";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->request($url,$soap,$headers);

	}


	public function DestinationCityList($CountryCode,$ReturnNewCityCodes = "true")
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/DestinationCityList";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:DestinationCityListRequest>
      <hot:CountryCode>$CountryCode</hot:CountryCode>
      <hot:ReturnNewCityCodes>$ReturnNewCityCodes</hot:ReturnNewCityCodes>
    </hot:DestinationCityListRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->request($url,$soap,$headers);

	}

	public function TopDestinations()
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/TopDestinations";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
  <hot:TopDestinationsRequest/>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->request($url,$soap,$headers);

	}


	public function HotelCodeList()
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelCodeList";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
  <hot:HotelCodesRequest/>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->request($url,$soap,$headers);

	}

	public function TagInfo()
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/TagInfo";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
  <hot:TagInfoRequest/>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->request($url,$soap,$headers);

	}

	public function GiataHotelCodeList($CityCode,$IsDetailedResponse)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/GiataHotelCodes";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:GiataHotelCodesRequest>
      <hot:CityCode>$CityCode</hot:CityCode>
      <hot:IsDetailedResponse>$IsDetailedResponse</hot:IsDetailedResponse>
    </hot:GiataHotelCodesRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->request($url,$soap,$headers);

	}
}
