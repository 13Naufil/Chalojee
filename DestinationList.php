<?php

  // The URL to POST to
  $url = "http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc";

  // The value for the SOAPAction: header
  $action = "http://TekTravel/HotelBookingApi/CountryList";

  // Get the SOAP data into a string, I am using HEREDOC syntax
  // but how you do this is irrelevant, the point is just get the
  // body of the request into a string
  $mySOAP = <<<EOD
<?xml version="1.0" encoding="utf-8" ?>
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:hot="http://TekTravel/HotelBookingApi">
  <soap:Header xmlns:wsa="http://www.w3.org/2005/08/addressing">
    <hot:Credentials UserName="chaloje" Password="Chalo@434"> </hot:Credentials>
    <wsa:Action>http://TekTravel/HotelBookingApi/CountryList</wsa:Action>
    <wsa:To>http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:CountryListRequest/>
  </soap:Body>
</soap:Envelope>
EOD;

// The HTTP headers for the request (based on image above)
$headers = array(
'Content-Type: application/soap+xml; charset=utf-8',
'Content-Length: '.strlen($mySOAP),
'SOAPAction: ' .$action
);

// Build the cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// Send the request and check the response
if (($result = curl_exec($ch)) === FALSE) {
die('cURL error: '.curl_error($ch)."<br />\n");
} else {
echo "Success!<br />\n";
print_r($result);
}
curl_close($ch);



?>