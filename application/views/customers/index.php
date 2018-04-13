<?php include(APPPATH.'views/common/head.php'); ?>
<?php include(APPPATH.'views/common/header.php'); ?>
<?php include(APPPATH.'views/common/navigation.php'); ?>

<div class="container">
    <div class="row">

        <div class="col-sm-5">


            <?php

            if (isset($this->session->userdata['message_display'])) {
                echo "<div class='alert alert-info'>";
                echo $this->session->userdata['message_display'];
                $this->session->unset_userdata('message_display');
                echo "</div>";
            }


            $attributes = array('id' => 'msform'); ?>
            <?php echo form_open_multipart('customers/register', $attributes);

            if (isset($this->session->userdata['errors'])) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->userdata['errors'];
                $this->session->unset_userdata('errors');
                echo "</div>";
            }


            ?>
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Account Setup</li>
                <li>Personal Details</li>
                <li>Address Details</li>
            </ul>
            <!-- fieldsets -->

            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle"></h3>
                <input type="text" name="Email" placeholder="Email" />
                <input type="password" id="password" name="password" placeholder="Password" />
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" />
                <div id="message"></div>
                <input type="button" id="next" name="next" class="next action-button" value="Next" disabled/>
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle"></h3>
                <select name="Title">
                    <option>Mr</option>
                    <option>Ms</option>
                </select>
                <input type="text" name="FirstName" placeholder="First Name" />
                <input type="text" name="LastName" placeholder="Last Name" />
                <input type="text" name="Age" placeholder="Age" />
                <input type="text" name="PhoneNo" placeholder="Phone" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Address Details</h2>
                <h3 class="fs-subtitle"></h3>
                <input type="text" name="Country" placeholder="Country" />
                <input type="text" name="State" placeholder="State" />
                <input type="text" name="City" placeholder="City" />
                <input type="text" name="ZipCode" placeholder="Zip Code" />
                <textarea name="AddressLine1" placeholder="AddressLine1"></textarea>
                <textarea name="AddressLine2" placeholder="AddressLine2"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>

            <?php echo form_close();?>
        </div>

        <div class="col-sm-1 middle-border"></div>
        <div class="col-sm-1"></div>

        <div class="col-sm-5">
            <?php

            if (isset($this->session->userdata['message_display_l'])) {
                echo "<div class='alert alert-info'>";
                echo $this->session->userdata['message_display_l'];
                $this->session->unset_userdata('message_display_l');
                echo "</div>";
            }
            $attributes = array('id' => 'msform','class'=>'login-top'); ?>
            <?php echo form_open_multipart('customers/validateuser', $attributes);

                if (isset($this->session->userdata['errors_l'])) {
                    echo "<div class='alert alert-danger'>";
                    echo $this->session->userdata['errors_l'];
                    $this->session->unset_userdata('errors_l');
                    echo "</div>";
                }


                ?>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Login</h2>
                    <input type="text" name="Email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit" class="btn btn-primary">Login</button>
                </fieldset>
            <?php echo form_close();?>

        </div>
    </div>

</div>

<script>
    $(function(){
        $('#password, #confirm_password').on('keyup', function () {
            if($('#password').val() != ''){
                if ($('#password').val() == $('#confirm_password').val()) {
                    $('#message').html('Matching').css('color', 'green');
                    $("#next").removeAttr("disabled");
                } else {
                    $('#message').html('Not Matching').css('color', 'red');
                    $("#next").attr("disabled","");
                }
            }
        });
    });
</script>

<?php include(APPPATH.'views/common/top_footer.php'); ?>
<?php include(APPPATH.'views/common/footer.php'); ?>
