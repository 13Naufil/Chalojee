<?php

  $url = "http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc";

  $action = "http://TekTravel/HotelBookingApi/HotelBook";

  $mySOAP = <<<EOD
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:hot="http://TekTravel/HotelBookingApi">
  <soap:Header xmlns:wsa="http://www.w3.org/2005/08/addressing">
    <hot:Credentials UserName="chaloje" Password="Chalo@434"> </hot:Credentials>
    <wsa:Action>http://TekTravel/HotelBookingApi/HotelBook</wsa:Action>
    <wsa:To>http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc</wsa:To>
  </soap:Header>
  <soap:Body>
    <hot:HotelBookRequest>
      <hot:ClientReferenceNumber>200314125855789#chan</hot:ClientReferenceNumber>
      <hot:GuestNationality>IN</hot:GuestNationality>
      <hot:Guests>
        <hot:Guest LeadGuest="true" GuestType="Adult" GuestInRoom="1">
          <hot:Title>Mr</hot:Title>
          <hot:FirstName>Chandra</hot:FirstName>
          <hot:LastName>test</hot:LastName>
          <hot:Age>20</hot:Age>
        </hot:Guest>
      </hot:Guests>
      <hot:AddressInfo>
        <hot:AddressLine1>testadd1</hot:AddressLine1>
        <hot:AddressLine2>testadd2</hot:AddressLine2>
        <hot:CountryCode>91</hot:CountryCode>
        <hot:AreaCode>11</hot:AreaCode>
        <hot:PhoneNo>25869696</hot:PhoneNo>
        <hot:Email>abc@gurgaon.in</hot:Email>
        <hot:City>Delhi</hot:City>
        <hot:State>Delhi</hot:State>
        <hot:Country>India</hot:Country>
        <hot:ZipCode>256525</hot:ZipCode>
      </hot:AddressInfo>
      <!-- VoucherBooking-false Booking will be confirmed -->
      <hot:PaymentInfo VoucherBooking="true" PaymentModeType="Limit">
      </hot:PaymentInfo>
      <hot:SessionId>45b29399-d575-4bc8-8d1b-1033a22fc6ac</hot:SessionId>
      <hot:NoOfRooms>1</hot:NoOfRooms>
      <hot:ResultIndex>1</hot:ResultIndex>
      <hot:HotelCode>CHA1</hot:HotelCode>
      <hot:HotelName>Champs Elysees</hot:HotelName>
      <hot:HotelRooms>
        <hot:HotelRoom>
          <hot:RoomIndex>1</hot:RoomIndex>
          <hot:RoomTypeName>Single Room Standard Single</hot:RoomTypeName>
          <hot:RoomTypeCode>SB|0|0||001:CHA1:8712:S8513:9537:39591|1</hot:RoomTypeCode>
          <hot:RatePlanCode>001:CHA1:8712:S8513:9537:39591|CHA1|SB</hot:RatePlanCode>
          <hot:RoomRate RoomFare="31.93" RoomTax="0.00" TotalFare="31.93" />
        </hot:HotelRoom>
      </hot:HotelRooms>
    </hot:HotelBookRequest>
  </soap:Body>
</soap:Envelope>
EOD;

$headers = array(
'Content-Type: application/soap+xml; charset=utf-8',
'Content-Length: '.strlen($mySOAP),
'SOAPAction: ' .$action
);

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
echo $result;
}
curl_close($ch);

?>
