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
                            <p>0</p>
                            <span>?</span>
                            <a href="javascript:;"></a>
                            <label class="home-radio">Off
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

    <div class="container">
        <div class="row">
            <!-- Right Side Start -->
            <div class="col-md-4 pad-both">
                <!--Modify Filter Section Start -->
                <div class="filter">
                    <h1>Your Hotel Search</h1>

                    <input class="loc-inpt" type="text" Placeholder="Dubai,United Arab Emirates" />
                    <input class="date-inpt" type="text" Placeholder="21Night(s) 27-Mar-2018 - 17-Apr-2018 " />
                    <div class="fltr-srch">
                        <select  class="rooms-inpt">
                            <option>Room(s)</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <input class="adult-inpt" type="text" Placeholder="1 Adult(s), 0 Child(s)" />
                    <input class="start-inpt" type="text" Placeholder="4 Star or More"/>
                    <button>Modify Serach</button>
                </div>
                <!--Modify Filter Section End -->

                <!--All Filter Section Start -->
                <div class="all-filter">
                    <h1>Your Hotel Search</h1>
                    <a href="javascript:;">Clear All Filters</a>
                    <div class="txt-filter"><input type="text" /></div>
                    <h2>Filter Search</h2><a href="javascript:;" class="iner-filter-link">Clear</a>
                    <div class="filter-box">
                        <input type="text" id="amount" readonly style="border:0; color:#000 ;width:100%; font-weight:bold;text-align: center;background: transparent;">
                        <div id="slider-range"></div>
                    </div>
                    <h2>Start Rating</h2><a href="javascript:;" class="iner-filter-link">Clear</a>
                    <div class="star-rating">
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="one" value="one">
                                <span class="checkmark"></span>
                            </label>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            <span>(158)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="two" value="two">
                                <span class="checkmark"></span>
                            </label>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            <span>(120)</span>
                        </div>
                    </div>
                    <h2>TripAdvisor Rating</h2><a href="javascript:;" class="iner-filter-link">Clear</a>
                    <div class="star-rating">
                        <div class="unrated">
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <span>Unrated (40)</span>
                            </div>
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="pic-rated"></p>
                                <div class="ratin-box"><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                    <img src="<?php echo base_url(); ?>img/half-circle.png" /><img src="<?php echo base_url(); ?>img/full-empty-circle.png" /><img src="<?php echo base_url(); ?>img/full-empty-circle.png" />
                                </div>
                                <span>(4)</span>
                            </div>
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="pic-rated"></p>
                                <div class="ratin-box"><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                    <img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-empty-circle.png" /><img src="<?php echo base_url(); ?>img/full-empty-circle.png" />
                                </div>
                                <span>(6)</span>
                            </div>
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="pic-rated"></p>
                                <div class="ratin-box"><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                    <img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/half-circle.png" /><img src="<?php echo base_url(); ?>img/full-empty-circle.png" />
                                </div>
                                <span>(34)</span>
                            </div>
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="pic-rated"></p>
                                <div class="ratin-box"><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                    <img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-empty-circle.png" />
                                </div>
                                <span>(64)</span>
                            </div>
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="pic-rated"></p>
                                <div class="ratin-box"><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                    <img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/half-circle.png" />
                                </div>
                                <span>(121)</span>
                            </div>
                            <div class="star-rating-inner">
                                <label class="chck-cont">
                                    <input type="checkbox"  id="three" value="three">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="pic-rated"></p>
                                <div class="ratin-box"><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                    <img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" /><img src="<?php echo base_url(); ?>img/full-circle.png" />
                                </div>
                                <span>(9)</span>
                            </div>

                        </div>
                    </div>
                    <!--  <h2>Property Type</h2><a href="javascript:;" class="iner-filter-link">Clear</a>
                      <div class="star-rating">
                          <div class="star-rating-inner">
                              <label class="chck-cont">
                                  <input type="checkbox"  id="three" value="three">
                                  <span class="checkmark"></span>
                              </label>
                              <span>Hotel (245)</span>
                          </div>
                          <div class="star-rating-inner">
                              <label class="chck-cont">
                                  <input type="checkbox"  id="three" value="three">
                                  <span class="checkmark"></span>
                              </label>
                              <span>Apartment (33)</span>
                          </div>
                      </div>-->
                    <!--<h2>Location</h2><a href="javascript:;" class="iner-filter-link">Clear</a>
                    <div class="star-rating">
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Deira (57)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Sheikh Zayed Road (19)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Near Islamic Museum (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Near Al Qasba (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Al Barsha Mall of Emirates (23)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Bur Dubai (32)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Near Al Jazeera Park (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Tecom (3)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>In Knob Noster (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Garhoud (6)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Jumeirah Lakes Tower (4)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>DowntownDubai Mall (13)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>World Trade Center (9)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Business Bay (8)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Dubai Festival City (3)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Dubailand (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Dubai Marina (12)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Jumeirah Beach (21)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Palm Jumeirah (9)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Dubai Media City (2)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Hotels in and around Terminal 1 and Teraminal 3 (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Al Meydan Road (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Dubai Desert Area Endurance City (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Discovery Gardens (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Al Qusais (2)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Green Community (1)</span>
                        </div>
                        <div class="star-rating-inner">
                            <label class="chck-cont">
                                <input type="checkbox"  id="three" value="three">
                                <span class="checkmark"></span>
                            </label>
                            <span>Dubai Desert Conservation Reserve Dubai (1)</span>
                        </div>
                    </div>-->
                </div>
                <!--All Filter Section End -->

            </div>
            <!-- Right Side Section End-->

            <!-- Left Side Section End-->
            <div class="col-md-8 pad-right">
                <div class="home-text">
                    <p><?php echo $notification[0]->Text; ?></p>
                </div>
                <div class="hotels-filter">
                    <div class="col-md-8">
                        <p>Filter Hotels: </p>
                        <ul>
                            <li><a href="javascript:;">A</a></li>
                            <li><a href="javascript:;">B</a></li>
                            <li><a href="javascript:;">C</a></li>
                            <li><a href="javascript:;">D</a></li>
                            <li><a href="javascript:;">E</a></li>
                            <li><a href="javascript:;">F</a></li>
                            <li><a href="javascript:;">G</a></li>
                            <li><a href="javascript:;">H</a></li>
                            <li><a href="javascript:;">I</a></li>
                            <li><a href="javascript:;">J</a></li>
                            <li><a href="javascript:;">K</a></li>
                            <li><a href="javascript:;">L</a></li>
                            <li><a href="javascript:;">M</a></li>
                            <li><a href="javascript:;">N</a></li>
                            <li><a href="javascript:;">O</a></li>
                            <li><a href="javascript:;">P</a></li>
                            <li><a href="javascript:;">Q</a></li>
                            <li><a href="javascript:;">R</a></li>
                            <li><a href="javascript:;">S</a></li>
                            <li><a href="javascript:;">T</a></li>
                            <li><a href="javascript:;">U</a></li>
                            <li><a href="javascript:;">V</a></li>
                            <li><a href="javascript:;">W</a></li>
                            <li><a href="javascript:;">X</a></li>
                            <li><a href="javascript:;">Y</a></li>
                            <li><a href="javascript:;">Z</a></li>
                            <li><a href="javascript:;">All</a></li>
                            <ul>
                    </div>
                    <div class="col-md-4">
                        <div class="home-serach"><input type="text" Placeholder="New Search" /></div>
                        <div class="home-map"><a href="javascript:;">Show Map</a></div>
                    </div>
                </div>

                <div class="home-content">
                    <div class="home-pormotion">
                        <div class="col-md-9 pad-right">
                            <div class="pormotion-inner">
                                <p>Sort Results on</p>
                                <ul>
                                    <li class="por-price"><a href="javascript:;">Price</a></li>
                                    <li class="por-star"><a href="javascript:;">Star</a></li>
                                    <li class="por-offer"><a href="javascript:;">Offers/Promotions</a></li>
                                    <li class="last">Showing 381 Results</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pormotion-links">
                                <a href="javascript:;"></a>
                                <a href="javascript:;" class="clr-all-filter">Clear All Filters</a>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-box">

                        <div class="pagination-right">
                            <select>
                                <option>20</option>
                            </select>
                        </div>

                        <div class="pagination-left">
                            <div class="pag-arrow-pre">
                                <a href="javascript:;" class="prev-arrow01"></a>
                                <a href="javascript:;" class="prev-arrow01"></a>
                            </div>
                            <div class="pagination-info"><p>Page</p><input type="text" placeholder="1" /><p>of 20 </p></div>
                            <div class="pag-arrow">
                                <a href="javascript:;" class="next-arrow01"></a>
                                <a href="javascript:;" class="next-arrow01"></a>
                            </div>
                        </div>




                    </div>

                    <div class="content-details">
                        <?php
                        if($StatusCode == 1){

                            foreach ($data['HotelSearchResponse']['HotelResultList']['HotelResult'] as $item):
                                ?>
                                <div class="col-md-3 pad-both">
                                    <div class="loc-pic"><img src="<?php echo $item['HotelInfo']['HotelPicture'];?>" class="img-responsive" /></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="inner-content-details">
                                        <h1><?php echo $item['HotelInfo']['HotelName'];?></h1><a href="javascript:;" class="content-map">Show Map</a>
                                        <div class="content-star"><?php echo get_rating($item['HotelInfo']['Rating']); ?>
                                            <span class="cont-face"></span>
                                            <a href="<?php echo isset($item['HotelInfo']['TripAdvisorReviewURL']) ? $item['HotelInfo']['TripAdvisorReviewURL'] : '#'; ?>"><?php echo isset($item['HotelInfo']['TripAdvisorRating']) ? get_tripadvisor_rating($item['HotelInfo']['TripAdvisorRating']) : '';?></a></div>
                                        <h3>Property Location</h3>
                                        <p><?php echo (strlen($item['HotelInfo']['HotelDescription']) > 30) ? substr($item['HotelInfo']['HotelDescription'],0,250).'...' : $item['HotelInfo']['HotelDescription'];?><a href="javascript:;">more details</a>
                                        </p>
                                        <div class="clearfix"></div>
                                        <!--<a href="javascript:;" class="content-payment">Pay at hotel options also available</a>-->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p class="price">$ <?php echo $item['MinHotelPrice']['@attributes']['TotalPrice'];?></p>
                                    <div class="price-icon-pic"><img src="<?php echo base_url(); ?>img/price-icon.png" /></div>
                                    <p class="min-price">Minimum Total Price</p>
                                    <p class="tax">(Incl. Taxes)</p>
                                    <div class="">
                                        <!--<label class="email-cont">Email
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>-->

                                    </div>
                                </div>
                                <div class="booking-div">
                                    <div class="col col-lg-12">
                                        <div class="row">
                                            <div class="col col-lg-9"></div>
                                            <div class="col col-lg-2">
                                                <a class="btn btn-primary" href="<?php echo base_url();?>booking">Book Now</a>
                                                <?php $attributes = array('id' => 'searchId'); ?>
                                                <?php echo form_open_multipart('detail', $attributes);  ?>
                                                <?php
                                                echo form_hidden('TripAdvisorRating',isset($item['HotelInfo']['TripAdvisorRating']) ? $item['HotelInfo']['TripAdvisorRating'] : '');
                                                echo form_hidden('TripAdvisorReviewURL',isset($item['HotelInfo']['TripAdvisorReviewURL']) ? $item['HotelInfo']['TripAdvisorReviewURL'] : '');
                                                echo form_hidden('Rating',$item['HotelInfo']['Rating']);
                                                echo form_hidden('CheckInDate',$data['HotelSearchResponse']['CheckInDate']);
                                                echo form_hidden('CheckOutDate',$data['HotelSearchResponse']['CheckOutDate']);
                                                echo form_hidden('SessionId',$data['HotelSearchResponse']['SessionId']);
                                                echo form_hidden('ResultIndex',$item['ResultIndex']);
                                                echo form_hidden('HotelCode',$item['HotelInfo']['HotelCode']);
                                                ?>
                                            </div>
                                            <div class="col col-lg-1">
                                                <button type="submit" class="btn-search-img"><img src="<?php echo base_url(); ?>img/book-button.png" /></button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo form_close();?>
                                </div>
                                <?php
                            endforeach;
                        }else{ echo "<div class='errormsg'>No Hotel Found</div>"; } ?>
                    </div>
                    <!-- Left Side Section Start-->
                </div>
            </div>

            <?php include(APPPATH.'views/common/top_footer.php'); ?>
            <?php include(APPPATH.'views/common/footer.php'); ?>

