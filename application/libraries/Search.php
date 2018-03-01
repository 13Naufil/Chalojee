<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search {

	public $username;
	public $password;


	public function HotelSearch($CheckInDate,$CheckOutDate,$CountryName,$CityName,$CityId,$IsNearBySearchAllowed,$NoOfRooms,$GuestNationality,$RoomGuests,$ResultCount,$Filters)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelSearch";

		$mySOAP = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelSearchRequest>
      <hot:CheckInDate>$CheckInDate</hot:CheckInDate>
      <hot:CheckOutDate>$CheckOutDate</hot:CheckOutDate>
      <hot:CountryName>$CountryName</hot:CountryName>
      <hot:CityName>$CityName</hot:CityName>
       <hot:CityId>$CityId</hot:CityId>
      <hot:IsNearBySearchAllowed>$IsNearBySearchAllowed</hot:IsNearBySearchAllowed>
      <hot:NoOfRooms>$NoOfRooms</hot:NoOfRooms>
      <hot:GuestNationality>$GuestNationality</hot:GuestNationality>
      <hot:RoomGuests>
        <hot:RoomGuest AdultCount="$RoomGuests[AdultCount]" ChildCount="$RoomGuests[ChildCount]">
            <hot:ChildAge>
             <hot:int>5</hot:int>
             <hot:int>13</hot:int>
            </hot:ChildAge>
        </hot:RoomGuest>
      </hot:RoomGuests>
      <hot:ResultCount>$ResultCount</hot:ResultCount>
      <hot:Filters>
        <hot:StarRating>$Filters[StarRating]</hot:StarRating>
        <hot:OrderBy>$Filters[OrderBy]</hot:OrderBy>
      </hot:Filters>
    </hot:HotelSearchRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->curl($url,$soap,$action,$headers);

	}


	public function AvailableHotelRooms($SessionId,$ResultIndex,$HotelCode)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/AvailableHotelRooms";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelRoomAvailabilityRequest>
      <hot:SessionId>$SessionId</hot:SessionId>
      <hot:ResultIndex>$ResultIndex</hot:ResultIndex>
      <hot:HotelCode>$HotelCode</hot:HotelCode>
    </hot:HotelRoomAvailabilityRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->curl($url,$soap,$action,$headers);

	}


	public function HotelCancellationPolicies($SessionId,$ResultIndex)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelCancellationPolicies";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelCancellationPolicyRequest>
      <hot:SessionId>$SessionId</hot:SessionId>
      <hot:ResultIndex>$ResultIndex</hot:ResultIndex>
    </hot:HotelCancellationPolicyRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->curl($url,$soap,$action,$headers);

	}

	public function HotelDetails($SessionId,$ResultIndex)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelDetails";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelDetailsRequest>
      <hot:SessionId>$SessionId</hot:SessionId>
      <hot:ResultIndex>$ResultIndex</hot:ResultIndex>
    </hot:HotelDetailsRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->curl($url,$soap,$action,$headers);

	}


	public function curl($url,$mySOAP,$action,$headers){
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		// Set required soap header
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		// Set request xml
		curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

		// Send the request and check the response
		if (($result = curl_exec($ch)) === FALSE) {
		die('cURL error: '.curl_error($ch)."<br />\n");
		} else {
		    $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $result);
		    $xml = new SimpleXMLElement($response);

		    $body = $xml->xpath('//sBody');
		    return  json_decode(json_encode((array)$body), TRUE);	
		}
		curl_close($ch);
	}
}
