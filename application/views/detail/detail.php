<?php include(APPPATH.'views/common/head.php'); ?>

<div class="main">
    <!-- Top Header Section Start -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="lang">
                        <select>
                            <option>EN</option>
                            <option>Gr</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="up-text">
                        <p>Start New Quotation / My Quotation</p>
                        <span>1</span>
                        <p>Saba Siddiq (Change Profile)</p>
                        <button>Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Section End -->


    <!-- Header Section Start -->
    <div class="clearfix"></div>
    <header class="main-menu">

        <!-- Logo Section Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="wrap">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logo.png"></a>
                    </div>
                </div>
                <div class="col-md-9 pad-right">
                   <!-- <div class="recharge">
                        <p>Avl Limit : $ 0.00 </p>
                        <button class="btn">Recharge</button>
                    </div>-->
                </div>
                <!-- Logo Section End -->

                <!-- Menu Section Start -->
                <div class="col-md-10 pad-both">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                                    aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Hotels</a></li>
                                <li><a href="#">Queues</a></li>
                                <li><a href="#">Accounts</a></li>
                                <li><a href="#">Reports</a></li>
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Packages</a></li>
                                <li class="inner-btn"><a href="#">Special Offer</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2 pad-right">
                    <p class="home-contact">Contact Us</p>
                </div>
                <!-- Menu Section End -->
            </div>
        </div>
    </header>
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
                        <div class="count">

                            <label class="home-radio" style="float:right">Off
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Bottom Links End -->


    <?php if($data != ''): ?>
        <?php print_r($data);?>
    <div class="container">
        <!-- Inner Hotel Details Section Start -->
        <div class="hotel-details-inner">
            <h1><?php echo $data['HotelDetails']['@attributes']['HotelName']; ?></h1>
            <p>Check In 23-Mar-2018 Check Out 24-Apr-2018</p>
            <div class="inner-content-star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span class="cont-face"></span>
                <img src="<?php echo base_url(); ?>img/full-circle.png" />
                <img src="<?php echo base_url(); ?>img/full-circle.png" />
                <img src="<?php echo base_url(); ?>img/full-circle.png" />
                <img src="<?php echo base_url(); ?>img/half-circle.png" />
                <img src="<?php echo base_url(); ?>img/full-empty-circle.png" />
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
            <div class="image-gallery">
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
        <div class="image-gallery-main">
            <div class="image-gallery">
                <button class="accordion">Map</button>
                <div class="panel">

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
                    <div class="inner-price-text"><p>Total Price: <strong>$ 1630.90</strong></p><a href="javascript:;">Continue</a></div>
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
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                        <span>Early Bird Offer</span></p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px"><a href="javascript:;">Cancellation Policies </a></td>
                                <td width="150px">$ 1976.38 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px"><a href="javascript:;">Cancellation Policies </a></td>
                                <td width="150px">$ 1976.38 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px"><a href="javascript:;">Cancellation Policies </a></td>
                                <td width="150px">$ 1976.38 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px">Free cancellation till: 20-Mar-2018</td>
                                <td width="150px">$ 1868.32 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>
                            <tr>
                                <td align="center" width="100px">
                                    <label class="table-chck">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></td>
                                <td width="300px">
                                    <p >Deluxe
                                        <strong>Show Room Description</strong>
                                    </p>
                                </td>
                                <td width="240px">Room Only</td>
                                <td width="400px"><a href="javascript:;">Cancellation Policies </a></td>
                                <td width="150px">$ 1976.38 <img src="<?php echo base_url(); ?>img/price-icon.png" /></td>
                                <td width="40px"><div class="plus">+</div></td>
                            </tr>


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
    <?php include(APPPATH.'views/common/top_footer.php'); ?>
    <?php include(APPPATH.'views/common/footer.php'); ?>
