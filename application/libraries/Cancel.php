<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cancel {

	public $username;
	public $password;


	public function HotelCancel($SessionId,$RequestType,$Remarks)
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
    <hot:HotelCancelRequest>
      <hot:SessionId>$SessionId</hot:SessionId>
      <hot:RequestType>$RequestType</hot:RequestType>
      <hot:Remarks>$Remarks</hot:Remarks>
    </hot:HotelCancelRequest>
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
