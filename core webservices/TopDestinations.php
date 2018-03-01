<?php

 $url = "http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc?singleWsdl";
 $action = "http://TekTravel/HotelBookingApi/TopDestinations";

  $mySOAP = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope"

xmlns:hot="http://TekTravel/HotelBookingApi">
  <soap:Header xmlns:wsa="http://www.w3.org/2005/08/addressing">
    <hot:Credentials UserName="chaloje" Password="Chalo@434"> </hot:Credentials>
    <wsa:Action>http://TekTravel/HotelBookingApi/TopDestinations</wsa:Action>
    <wsa:To>http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc</wsa:To>
  </soap:Header>
   <soap:Body>
     <hot:TopDestinationsRequest/>
     </soap:Body>
</soap:Envelope>
EOD;

// The HTTP headers for the request (based on image above)
// Content-Type and SOAPAction are important parameter
$headers = array(
'Content-Type: application/soap+xml; charset=utf-8',
'Content-Length: '.strlen($mySOAP),
'SOAPAction: ' .$action
);

// Build the cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
// Set required soap header
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// Set request xml
curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Send the request and check the response
// below you will be requesting our api using  curl_exec($ch), and $result contains api response
if (($result = curl_exec($ch)) === FALSE) {
die('cURL error: '.curl_error($ch)."<br />\n");
} else {
echo "Success!<br />\n";
    $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $result);
    $xml = new SimpleXMLElement($response);

    $body = $xml->xpath('//sBody');
    $array = json_decode(json_encode((array)$body), TRUE);

print_r($array);
}
curl_close($ch);


?>

