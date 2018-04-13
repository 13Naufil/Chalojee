<header>
    <div class="top_header">
        <div class="container">
            <?php if(!isset($this->session->userdata['logged_in'])):?>
            <div class="row">
                <div class="pull-left">
                        <ul>
                            <li><i class="fa fa-phone"><span class="space">+92-000-0000</span></i></li>
                            <li><i class="fa fa-envelope"><span class="space">info@chaloje.com</span></i></li>
                            <li><i class="fa fa-clock-o"><span class="space">6am - 11pm</span></i></li>
                        </ul>
                </div>
                <div class="pull-right">
                    <ul>
                        <li><a href="#" title="Facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" title="Youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <?php else: ?>
                <div class="row">
                    <div class="pull-right">
                        <div class="up-text">
                            <!--<p>Start New Quotation / My Quotation</p>
                            <span>1</span>-->
                            <p><?php echo $this->session->userdata['logged_in']['FirstName']." ".$this->session->userdata['logged_in']['LastName']; ?> (Change Profile)</p>
                            <button onclick="window.location = '<?php echo base_url();?>logout'">Logout</button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

