<?php include(APPPATH.'views/common/head.php'); ?>
<?php include(APPPATH.'views/common/header.php'); ?>

<style>
    #country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:100%;position: absolute;}
    #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
    #country-list li:hover{background:#ece3d2;cursor: pointer;}
</style>

<section>
    <div class="container">
        <div class="content">
            <h1 class="white-color">When your journey begins</h1>
            <p class="white-color">Discover your next great adventure, become an explorer to get started!</p>
        </div>
        <div class="search">

            <div class="row search-panel">


                <div class="col col-lg-4">
                    <div class="row">
                        <label class="search-label">Destination</label>
                    </div>
                    <div class="row">
                        <input class="form-control" type="text" id="search" name="search">
                        <div id="suggesstion-box"></div>
                    </div>

                </div>
                <div class="col col-lg-2">
                    <div class="row">
                        <label class="search-label">Check In</label>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class='input-group date' id="datetimepicker1">
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <div class="row">
                        <label class="search-label">Check Out</label>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class='input-group date'  id="datetimepicker2">
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-1">
                    <div class="row">
                        <label class="search-label">Rooms</label>
                    </div>
                    <div class="row">
                        <select class="form-control" id="Adult">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1">
                    <div class="row">
                        <label class="search-label">Adult</label>
                    </div>
                    <div class="row">
                        <select class="form-control" id="Adult">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1">
                    <div class="row">
                        <label class="search-label">Child</label>
                    </div>
                    <div class="row">
                        <select class="form-control" id="Child">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1 btn-search">
                    <div class="row">
                        <a href="#"><img src="<?php echo base_url(); ?>images/search.png" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    $( function() {
        //var base_url = "<?php echo base_url(); ?>index.php/Main/HotelSearch";
        //console.log(base_url);

    $('#search').autocomplete({
        source : function(request, response){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/Main/HotelSearch",
            data:{str: $('#search').val(),limit:5},
            beforeSend: function(){
                $("#search").css("background","#FFF url(<?php echo base_url(); ?>images/LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data)
            {
                console.log(data); // show response from the php script.
                $("#suggesstion-box").show();
                $("#suggesstion-box").html(data);
                $("#suggesstion-box").css("background","#FFF");
                $("#suggesstion-box").css("color","black");
                $("#search").css("background","#FFF");
            }
        });
    }
    });

    } );

    function selectCountry(value) {
        //console.log(value);
        $("#search").val(value);
        $("#suggesstion-box").hide();
    }
</script>


<?php include(APPPATH.'views/common/top_footer.php'); ?>
<?php include(APPPATH.'views/common/footer.php'); ?>
