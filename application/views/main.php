<?php include(APPPATH.'views/common/head.php'); ?>
<?php include(APPPATH.'views/common/header.php'); ?>
<?php include(APPPATH.'views/common/navigation.php'); ?>

<style>
    #country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:100%;position: absolute;}
    #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
    #country-list li:hover{background:#ece3d2;cursor: pointer;}
</style>

<section>
    <div class="container">
        <div class="content text-center">
            <h1 class="white-color">When your journey begins</h1>
            <p class="white-color">Discover your next great adventure, become an explorer to get started!</p>
        </div>
        <div class="search">
            <?php $attributes = array('id' => 'searchId'); ?>
            <?php echo form_open_multipart('listing', $attributes);  ?>
            <div class="row search-panel text-center">


                <div class="col col-lg-4">
                    <div class="row">
                        <label class="search-label">Destination</label>
                    </div>
                    <div class="row">
                        <input class="form-control" type="text" id="search" name="search" required>
                        <div id="suggesstion-box"></div>
                    </div>

                </div>
                <div class="col col-lg-2">
                    <div class="row">
                        <label class="search-label">Check In</label>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div id="datetimepicker11">
                                <input type='text' class="form-control datepicker" name="check_in" required/>
                                <!--<span class="input-group-addon">-->
                        <!--<span class="glyphicon glyphicon-calendar"></span>-->
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
                            <div id="datetimepicker21">
                                <input type='text' class="form-control datepicker" name="check_out" required/>
                                <!--<span class="input-group-addon">-->
                        <!--<span class="glyphicon glyphicon-calendar"></span>-->
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
                        <select class="form-control" id="Adult" name="rooms">
                            <?php for($i=1;$i<=10;$i++):?>
                            <option><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1">
                    <div class="row">
                        <label class="search-label">Adult</label>
                    </div>
                    <div class="row">
                        <select class="form-control" id="Adult" name="adult">
                            <?php for($i=1;$i<=10;$i++):?>
                                <option><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1">
                    <div class="row">
                        <label class="search-label">Child</label>
                    </div>
                    <div class="row">
                        <select class="form-control" id="Child" name="child">
                            <?php for($i=0;$i<=10;$i++):?>
                                <option><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1 btn-search">
                    <div class="row">
                        <button class="btn-search-img" type="submit"><img src="<?php echo base_url(); ?>images/search.png" /></button>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12" id="child-age">
                <div class="row text-center">
                    <h4 class="white-color">Child Age</h4>
                </div>
                <div class="row" id="child-age-context"></div>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</section>

<script>
    $( function() {

    $('#search').autocomplete({
        source : function(request, response){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Main/HotelSearch",
            data:{str: $('#search').val(),limit:5},
            beforeSend: function(){
                $("#search").css("background","#FFF url(<?php echo base_url(); ?>images/LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data)
            {
                $("#suggesstion-box").show();
                $("#suggesstion-box").html(data);
                $("#suggesstion-box").css("background","#FFF");
                $("#suggesstion-box").css("color","black");
                $("#search").css("background","#FFF");
            }
        });
    }
    });

        $('.datepicker').datepicker({
            format: 'YYYY-MM-DD'
        });

    } );


    $('#Child').on('change',function(){
        var child = this.value;
        var data = [];
        for(var a = 1; a <= child; a++)
        {
            data.push(selectChildAge());
            //data[] = selectChildAge();
            console.log(a);

        }
        $('#child-age-context').html(data);
    });

    function selectCountry(value) {
        //console.log(value);
        $("#search").val(value);
        $("#suggesstion-box").hide();
    }

    function removeSelectChildAge()
    {
        $('#child-age-context').empty();
    }

    function selectChildAge(value)
    {
        removeSelectChildAge();
        return "<div class='col col-lg-2'><div class='child-age'><select name='child_age[]' class='form-control'><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></div></div>";
    }
</script>


<?php include(APPPATH.'views/common/top_footer.php'); ?>
<?php include(APPPATH.'views/common/footer.php'); ?>
