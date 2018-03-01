<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking {

	public $username;
	public $password;

	
	public function AvailabilityAndPricing($SessionId,$ResultIndex,$FixedFormat = false,$RoomCombination = 1)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/AvailabilityAndPricing";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:AvailabilityAndPricingRequest>
      <hot:SessionId>$SessionId</hot:SessionId>
      <hot:ResultIndex>$ResultIndex</hot:ResultIndex>
      <hot:OptionsForBooking>
		 <hot:FixedFormat>$FixedFormat</hot:FixedFormat>
		 <hot:RoomCombination>
		 	<hot:RoomIndex>$RoomCombination</hot:RoomIndex>
		 </hot:RoomCombination>
	   </hot:OptionsForBooking>
    </hot:AvailabilityAndPricingRequest>
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


	public function HotelBook($ClientReferenceNumber,$GuestNationality,$Guests,$AddressInfo,$PaymentInfo,$SessionId,$NoOfRooms,$ResultIndex,$HotelCode,$HotelName,$HotelRoom)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelBook";

		$mySOAP = <<<EOD
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelBookRequest>
      <hot:ClientReferenceNumber>$ClientReferenceNumber</hot:ClientReferenceNumber>
      <hot:GuestNationality>$GuestNationality</hot:GuestNationality>
      <hot:Guests>
        <hot:Guest LeadGuest="$Guests[LeadGuest]" GuestType="$Guests[GuestType]" GuestInRoom="$Guests[GuestInRoom]">
          <hot:Title>$Guests[Title]</hot:Title>
          <hot:FirstName>$Guests[FirstName]</hot:FirstName>
          <hot:LastName>$Guests[LastName]</hot:LastName>
          <hot:Age>$Guests[Age]</hot:Age>
        </hot:Guest>
      </hot:Guests>
      <hot:AddressInfo>
        <hot:AddressLine1>$AddressInfo[AddressLine1]</hot:AddressLine1>
        <hot:AddressLine2>$AddressInfo[AddressLine2]</hot:AddressLine2>
        <hot:CountryCode>$AddressInfo[CountryCode]</hot:CountryCode>
        <hot:AreaCode>$AddressInfo[AreaCode]</hot:AreaCode>
        <hot:PhoneNo>$AddressInfo[PhoneNo]</hot:PhoneNo>
        <hot:Email>$AddressInfo[Email]</hot:Email>
        <hot:City>$AddressInfo[City]</hot:City>
        <hot:State>$AddressInfo[State]</hot:State>
        <hot:Country>$AddressInfo[Country]</hot:Country>
        <hot:ZipCode>$AddressInfo[ZipCode]</hot:ZipCode>
      </hot:AddressInfo>
      <!-- VoucherBooking-false Booking will be confirmed -->
      <hot:PaymentInfo VoucherBooking="$PaymentInfo[VoucherBooking]" PaymentModeType="$PaymentInfo[PaymentModeType]">
      </hot:PaymentInfo>
      <hot:SessionId>$SessionId</hot:SessionId>
      <hot:NoOfRooms>$NoOfRooms</hot:NoOfRooms>
      <hot:ResultIndex>$ResultIndex</hot:ResultIndex>
      <hot:HotelCode>$HotelCode</hot:HotelCode>
      <hot:HotelName>$HotelName</hot:HotelName>
      <hot:HotelRooms>
        <hot:HotelRoom>
          <hot:RoomIndex>$HotelRoom[RoomIndex]</hot:RoomIndex>
          <hot:RoomTypeName>$HotelRoom[RoomTypeName]</hot:RoomTypeName>
          <hot:RoomTypeCode>$HotelRoom[RoomTypeCode]</hot:RoomTypeCode>
          <hot:RatePlanCode>$HotelRoom[RatePlanCode]</hot:RatePlanCode>
          <hot:RoomRate RoomFare="$HotelRoom[HotelRoom]" RoomTax="$HotelRoom[HotelRoom]" TotalFare="$HotelRoom[TotalFare]" />
        </hot:HotelRoom>
      </hot:HotelRooms>
    </hot:HotelBookRequest>
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


	public function GenerateInvoice($BookingId,$PaymentInfo)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/GenerateInvoice";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:GenerateInvoiceRequest>
      <hot:BookingId>$BookingId</hot:BookingId>
      <hot:PaymentInfo VoucherBooking="$PaymentInfo[VoucherBooking]" PaymentModeType="$PaymentInfo[PaymentModeType]">
	   </hot:PaymentInfo>
    </hot:GenerateInvoiceRequest>
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

	public function HotelBookingDetail($BookingId)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelBookingDetail";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"></hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelBookingDetailRequest>
      <hot:BookingId>$BookingId</hot:BookingId>
    </hot:HotelBookingDetailRequest>
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


	public function HotelBookingDetailBasedOnDate($FromDate,$ToDate)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/HotelBookingDetailBasedOnDate";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"></hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelBookingDetailBasedOnDateRequest>
      <hot:FromDate>$FromDate</hot:FromDate>
      <hot:ToDate>$ToDate</hot:ToDate>
    </hot:HotelBookingDetailBasedOnDateRequest>
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
