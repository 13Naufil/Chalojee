<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookingamendment extends Curl {

	public $username;
	public $password;


	public function Amendment($Request,$RequestType,$AmendInformation,$Rooms)
	{
		
		$username = $this->username;
		$password = $this->password;

		$url = WSDL;
		$xmlns = WSDL_ACTION;
		$soap_envolope = SOAP_ENV;
		$w3_addressing = W3_ADDRESSING;
		$action = WSDL_ACTION."/Amendment";

		$soap = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="$soap_envolope" xmlns:hot="$xmlns">
  <soap:Header xmlns:wsa="$w3_addressing">
    <hot:Credentials UserName="$username" Password="$password"> </hot:Credentials>
    <wsa:Action>$action</wsa:Action>
    <wsa:To>$url</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:AmendmentRequest>
      <hot:Request Type="$Request[Type]" PriceChange="$Request[PriceChange]" Remarks="$Request[Remarks]"/>
		 <hot:BookingId>1729</hot:BookingId>
		 <hot:AmendInformation>
			 <hot:CheckIn Date="$AmendInformation[CheckIn]"/>
			 <hot:CheckOut Date="$AmendInformation[CheckOut]"/>
				 <hot:Rooms>
					 <hot:RoomReq Amend="$Rooms[RoomReq]">
					 <hot:Guest Action="$Rooms[Action]" ExistingName="$Rooms[ExistingName]" GuestType="$Rooms[GuestType]" Title="$Rooms[Title]" FirstName="$Rooms[FirstName]" LastName="$Rooms[LastName]"
					Age="24"/>
					 </hot:RoomReq>
				 </hot:Rooms>
		 </hot:AmendInformation>
    </hot:AmendmentRequest>
  </soap:Body>
</soap:Envelope>
EOD;

		$headers = array(
		'Content-Type: application/soap+xml; charset=utf-8',
		'Content-Length: '.strlen($soap),
		'SOAPAction: ' .$action
		);

	return $this->cURL($url,$soap,$action,$headers);

	}
}
