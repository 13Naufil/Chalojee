<?php include(APPPATH.'views/common/head.php'); ?>
<?php include(APPPATH.'views/common/header.php'); ?>

<div class="main">
    <!-- Header Section Start -->
    <div class="clearfix"></div>
    <?php include(APPPATH.'views/common/navigation.php'); ?>
    <!-- Header Section End -->


    <!-- Header Bottom Links Start -->
    <section class="header-links">
        <div class="container">
            <div class="row">
                <div class="links">
                    <div class="col-md-10 pad-both">
                        <div class="inner-header-links">
                            <ul>
                                <li><a href="javascript:;">Hotel Search </a></li>
                                <li><a href="javascript:;">Hotel Results</a></li>
                                <li><a href="javascript:;">Guest Details </a></li>
                                <li><a href="javascript:;">Review Booking</a></li>
                                <li class="last"><a href="javascript:;">Confirmation</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!--<div class="count">

                            <label class="home-radio" style="float:right">Off
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Bottom Links End -->


    <?php if($data != ''): ?>
    <div class="container">
        <!-- Inner Hotel Details Section Start -->
        <div class="hotel-details-inner">
            <h1><?php echo $data['HotelDetails']['@attributes']['HotelName']; ?></h1>
            <p>Check In <?php echo $CheckInDate; ?> Check Out <?php echo $CheckOutDate; ?></p>
            <div class="inner-content-star">
                <?php echo get_rating($Rating); ?>
                <span class="cont-face"></span>
                <a href="<?php echo $TripAdvisorReviewURL; ?>"><?php echo get_tripadvisor_rating($TripAdvisorRating);?></a>
            </div>
            <div class="inner-loc"><?php echo $data['HotelDetails']['Address']; ?></div>
        </div>
        <!-- Inner Hotel Details Section End -->

        <!-- Hotel Links Section Start -->
        <div class="inner-hotel-links">
            <ul>
                <li><a href="javascript:;"><img src="<?php echo base_url(); ?>img/inner-pic/01.png" />Available Rooms</a></li>
                <li><a href="javascript:;"><img src="<?php echo base_url(); ?>img/inner-pic/02.png" />Hotel Details</a></li>
                <li><a href="javascript:;"><img src="<?php echo base_url(); ?>img/inner-pic/03.png" />Image Gallery</a></li>
                <li><a href="javascript:;"><img src="<?php echo base_url(); ?>img/inner-pic/04.png" />Hotel Map</a></li>
            </ul>
        </div>
        <!-- Hotel Links Section End -->

        <!-- Image Gallery Section Start -->
        <div class="image-gallery-main">
            <div class="image-gallery">
                <button class="accordion">Hotel Details</button>
                <div class="panel">
                    <p><?php echo stripslashes($data['HotelDetails']['Description']); ?></p>
                </div>

            </div>
        </div>
        <!-- Image Gallery Section End -->

        <!-- Image Gallery Section Start -->
        <div class="image-gallery-main">
            <div class="image-gallery" id="detail-list">
                <button class="accordion">Image Gallery</button>
                <div class="panel">
                    <div class="col col-lg-12">
                        <div class="row">
                            <?php foreach ($data['HotelDetails']['ImageUrls']['ImageUrl'] as $img):?>
                            <div class="col col-lg-2">
                                <img src="<?php echo $img;?>" class="img-responsive"/>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Image Gallery Section End -->
        <!-- Map Section Start -->
        <?php

            if(!empty($data['HotelDetails']['Map'])):
                $cordinates = explode("|",$data['HotelDetails']['Map']);
                $lat = $cordinates[0];
                $long = $cordinates[1];
            endif;


        ?>
        <div class="image-gallery-main">
            <div class="image-gallery">
                <button class="accordion">Map</button>
                <div class="panel">
                    <input type="hidden" id="lat" value="<?php echo $lat; ?>">
                    <input type="hidden" id="long" value="<?php echo $long; ?>">
                    <div id="map" style="height: 350px;"></div>
                </div>

            </div>
        </div>
        <!-- Map Section End -->
        <!-- Other Facilities Section Start -->
        <div class="image-gallery-main">
            <div class="image-gallery amenities">
                <button class="accordion">Basic Amenities</button>
                <div class="panel">
                    <ul>
                        <?php foreach ($data['HotelDetails']['HotelFacilities']['HotelFacility'] as $amenities):?>
                            <li><?php echo stripslashes($amenities); ?></li>
                        <?php endforeach;?>
                    </ul>

                </div>

            </div>
        </div>
        <!-- Other Facilities Section End -->

        <!-- Available Rooms Section Start -->
        <div class="available-rooms">
            <p>* Please note that price has been changed based upon the real time inventory.</p>
            <input type="text" Placeholder="Available Room(s)">
        </div>
        <!-- Available Rooms Section End -->
    </div>


    <div class="container">
        <div class="row">
            <div class="innet-table">
                <!-- Hotel Table Upper Section Start -->
                <div class="col-md-6">
                    <h1 class="table-heading01">Deluxe Room</h1>
                </div>
                <div class="col-md-6 flt-right">
                    <div class="inner-price-text"><p>Total Price: <strong id="total_price"></strong></p><a href="<?php echo base_url();?>booking">Continue</a></div>
                </div>
                <!-- Hotel Table Upper Section End -->

                <!-- Hotel Table Middle Section Start -->
                <div class="table-details-box">
                    <div class="col-md-1 pad-left">
                        <h1 class="table-heading">Room 1<br>(1Adult)</h1>
                    </div>
                    <div class="col-md-6 flt-right">
                        <div class="free-cancellation">
                            <label class="free-cancellation-chck">Free Cancellation
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="meal">
                            <select>
                                <option>Meal(s)</option>
                            </select>
                        </div>
                        <div class="inner-price">
                            <select>
                                <option>Price</option>
                            </select>
                        </div>
                        <div class="search-room-type">
                            <input type="text" Placeholder="Search Room Type" />
                        </div>
                    </div>
                </div>
                <!-- Hotel Table Middle Section End -->

                <!-- Hotel Table Section Start -->
                <div class="my-table">
                    <div class="table-responsive">
                        <table class="table">
                            <?php
                             foreach($room_details['HotelRooms']['HotelRoom'] as $room): ?>
                                 <?php  echo form_hidden('RoomIndex',$room['RoomIndex']); ?>
                                 <?php  echo form_hidden('RoomTypeCode',$room['RoomTypeCode']); ?>


                            <tr id="<?php echo $room['RoomIndex']; ?>">
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="radio" name="checkmark" class="checkmark" <?php echo $room['RoomIndex'] == 1 ? 'checked' : ''; ?> value="<?php echo $room['RoomRate']['@attributes']['TotalFare']; ?>"/>
                                        <?php  echo form_hidden(array('name'=>'TotalFare','id'=>'TotalFare','class'=>'TotalFare','value'=>$room['RoomRate']['@attributes']['TotalFare'])); ?>
                                       <!-- <span class="checkmark"></span>-->
                                    </label></td>
                                <td width="300px">
                                    <p><?php echo $room['RoomTypeName']; ?>
                                        <strong>Show Room Description</strong>
                                        <span>Early Bird Offer</span></p>
                                </td>
                                <td width="240px"><?php echo $room['Inclusion'] != null ? $room['Inclusion'] : 'Room Only'; ?></td>
                                <td width="400px"><a href="javascript:;">Cancellation Policies </a></td>
                                <td width="150px" aria-controls="total_fair">$ <?php echo $room['RoomRate']['@attributes']['TotalFare']; ?> <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <?php endforeach;?>

                        </table>
                    </div>
                </div>
                <!-- Hotel Table Section End -->
            </div>
        </div>
    </div>
   <?php else: ?>
    <div class="container">
        <div class="row errormsg">
            <p><?php echo $message; ?></p>
        </div>
    </div>
    <?php endif; ?>

    <script>
        function initMap() {
            var latitude = $('#lat').val();
            var longitude = $('#long').val();

            var cordinate = {lat: latitude, lng: longitude};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: cordinate
            });
            var marker = new google.maps.Marker({
                position: cordinate,
                map: map
            });
        }

        function myMap() {

            var latitude = $('#lat').val();
            var longitude = $('#long').val();

            var mapProp= {
                center:new google.maps.LatLng(latitude,longitude),
                zoom:20,
            };
            var map=new google.maps.Map(document.getElementById("map"),mapProp);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude,longitude),
                map: map
            });
        }

        $(function(){

            var load = '$ '+$('input:radio[name="checkmark"]').val();
            $('#total_price').html(load);

            $('input:radio[name="checkmark"]').change(
                function(){
                    var val = '$ '+$(this).val();
                    $('#total_price').html(val);
            });
        });
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANDYAOXDdZGOJklGCXqVgPbDC_UcF0hL8&callback=myMap">
    </script>

    <?php include(APPPATH.'views/common/top_footer.php'); ?>
    <?php include(APPPATH.'views/common/footer.php'); ?>
