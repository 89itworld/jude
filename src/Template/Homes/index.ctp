<!--<div class="spinner-wrapper">
    <div class="bubblingG">
        <span id="bubblingG_1"></span>
        <span id="bubblingG_2"></span>
        <span id="bubblingG_3"></span>
    </div>
</div>-->
<!-- /END PRELOADER -->

<div class="redirect-wrap">
    <div class="flight_loader">
        <div class="redirect-img">
            <span id="flight_leaving_from"></span>
            <?php echo $this->Html->image('progress.png', ['class' => 'arrow', 'id' => 'p-bar', 'width' => '60']) ?>
            <span id="flight_going_to"></span>
        </div>
        <h5>Please wait We’re looking for all available flights...</h5>
        <?php echo $this->Html->image('progress-line.gif', ['class' => 'progress-bar', 'id' => 'p-bar']); ?>
    </div>
</div>

<header class="header" id="header" data-stellar-background-ratio="0.5"> <!--Start: "Header Area"-->
    <div class="fix overlay_color"> <!--Start:  "Overlay Color"-->
        <div class="fix container header_body" id="header_body"> <!--Start:  "Overlay Color"-->
		
            <div class="row">
                <div class="header_body_left col-sm-12 col-lg-12 col-md-12"> <!--Start:  "Header Left side"-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 logo">
                                <!-- Start: Your logo area -->

                                <?php echo $this->Html->link($this->Html->image('logo/judefly_trans_bg_logo.png', ['class' => 'img-responsive wow fadeIn animated', 'data-wow-offset' => '10', 'date-wow-duration' => '1.5s', 'style' => 'display:inline-block']), '/', ['escape' => false]); ?>
                                <!-- End: Your logo area -->
                            </div>
							<div class="col-md-5 col-lg-5 col-sm-5 col-xs-6 buttonlog"><!-- Start: Your buttonlog -->
							 	<?php if (empty($this->request->session()->read('Auth.User'))) { ?>
								   <a href="javascript:void(0)" class="trv-subscribe1" data-toggle="modal" data-target="#loginSignup">  Log In / Sign Up</a>
								<?php } else{ 
									 echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'],['class'=>'trv-subscribe1']); 
								} ?>
							</div><!-- End: Your buttonlog-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Start: Your Header Title area -->
                                <div class="header_title wow fadeIn animated fontrail " data-wow-offset="10"
                                     data-wow-duration="1.5s">
                                    <!--Commented by yasar 26-Apr-2016-->
                                    <!-- <h1>Mobile App Is</h1>-->
                                   <!-- <h2>Coming Soon</h2>-->
                                </div>
                                <!-- End: Your Header                                            <li class=""> Discover New Places</li>
 Title area -->
                            </div>
                        </div>
                        <div class="row" style="margin-top:200px;">
                            <div class="col-lg-12">
                                <!-- Start: Description area -->
                                <div class="detail wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div class="tagline visible-lg fontrail " id="tagline"><span>It's time to</span>
                                        <ul>
                                            <li class="">Go</li>
                                            <li class="">Live</li>
                                            <li class="">See The World</li>
                                            <li class="">Explore</li>
                                            <li class=""> Discover New Places</li>
                                            <li class="">Relax</li>
                                            <li class="">Getaway</li>
                                            <li class="">Play</li>
                                            <li class="active">Meet New People</li>
                                            <li class="">Have Fun</li>
                                            <li class="">Travel With Judefly</li>
                                            <!--Commented by yasar 26-Apr-2016-->
                                            <!--<li class="">Explore</li>
                                            <li class="">Discover new Places</li>
                                            <li class="">Live</li>
                                            <li class="">Relax</li>
                                            <li class="">Getaway</li>
                                            <li class="">Play</li>
                                            <li class="">Experience something New</li>
                                            <li class="">Travel Judefly</li>
                                            <li class="active">Meet New Friends</li>
                                            <li class="">Have Fun</li>
                                            <li class="">Go</li>-->
                                        </ul>
                                    </div>
                                </div>
                                <!-- End: CountDown area -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Start: Description area -->
                                <div class="detail wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <p style="font-size: 30px; color:#FAFAFA">Register now and get early access</p>
                                </div>
                                <!-- End: CountDown area -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="subscribe_form col-lg-12" style="margin-top: 20px; margin-bottom:100px;">
                                <!-- Start: Subscribe Button area -->
                                <a href="" class="trv-subscribe" data-toggle="modal" data-target="#subscription">Subscribe</a>
                                <p style="margin-top: 20px;" class="subscription_success"></p>
                                <!-- End: Subscribe Button area" -->

                                <!---------------------- Subscribe Modal Start ---------------------------->
                                <div id="subscription" class="modal fade" role="dialog">
                                    <div class="col-md-5 modalreset">

                                        <div class="modal-dialog width-100" style="posistion: relative">
                                            <button type="button" class="mclose" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                            <div class="modal-content" >

											<!-- <form class="mailchimp-subscribe wow fadeIn animated" role="form" data-wow-offset="10" data-wow-duration="1.5s">
			                                    <div class="row">
			                                        <div class="subscription col-md-12 col-sm-10">
			                                            <p class="subscription-success"></p>
			                                            <p class="subscription-failed"></p>
			                                            <div class="input-group">
			                                                <input type="email" id="subscriber-email" name="email" placeholder="Your email address" class="form-control">
			                                                <span class="input-group-btn">
			                                                    <button class="btn btn-standard btn-main btn-medium">Subscribe</button>
			                                                </span>
			                                            </div>
			                                        </div>
			                                    </div>
			                                  </form> -->
                                
                                                <div class="modal-body no-padding">
                                                    <div class="col-md-10 modalreset">
                                                        <div class="addpad10">
                                                            <div class="modal-header text-center">
                                                                <?php echo $this->Html->image('logo/jud-logo-small.png');?>
                                                            </div> <!-- modal-header -->
                                                            <div class="subs-headtxt2 text-center">
                                                                <h5>We are Not Quite Ready to Launch Yet</h5>
                                                                <h1>Sign up Now! Get notified. <br />
                                                                    Be one of the first to use Judefly’s Beta</h1>
                                                            </div> <!-- subs-headtxt -->
                                                           <form id="subscribe_form">
                                                            <div class="form-group subslabel">
                                                                <label class="text-center">Enter your email for early access</label>
                                                                <p class="text-center subscription_failed" style="color:red"></p>
                                                                <input type="text" name="email" id="subs_email" placeholder="email@address.com" class="form-control noradius text-center trvin1">
                                                            </div> <!-- form-group -->
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-primary bluebtn2 trv-subbtn" value="Subscribe">
                                                            </div> <!-- form-group -->
                                                           </form>
                                                        </div> <!-- addpad10 -->
                                                    </div> <!-- col-md-5 -->

                                                </div> <!-- modal-body -->
                                            </div> <!-- modal-content -->
                                        </div> <!-- modal-dialog -->
                                    </div> <!-- col-md-8 col-md-offset-2 -->
                                </div> <!-- subscription -->
                                <!---------------------- Subscribe Modal Start ---------------------------->
                            </div>
                        </div>
                    </div>

                </div><!-- End:  "Header Left side"-->
                
                <!-- <div class="header_body_right hidden-xs hidden-sm col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-2 wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">-->
                <!--Start:  "Header Right side"-->

                <!--   Your Product item goes here   -->
                <?php // echo $this->Html->image('product_pic.png',['class'=>'img-responsive img','alt'=>'']); ?>

            </div> <!--End:  "Header Right side"-->
        </div> <!--End:  "row"-->
    </div><!--End:  "Overlay Color"-->
    </div> <!--End:  Overlay Color-->
</header> <!--End: Header Area-->

<section id="section-1" class="tab">
    <div class="container">
        <div class="awe-search-tabs tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul role="tablist" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                <li aria-selected="false" aria-labelledby="ui-id-1" aria-controls="awe-search-tabs-1" tabindex="-1"
                    role="tab" class="ui-state-default ui-corner-top ui-tabs-active ui-state-active">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-plane"></i>', '#awe-search-tabs-1', ['id' => 'ui-id-1', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-8" aria-controls="awe-search-tabs-8" tabindex="-1"
                                    role="tab" class="ui-state-default ui-corner-top">
                                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-r-trip"></i>', '#awe-search-tabs-8', ['id' => 'ui-id-8', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-9" aria-controls="awe-search-tabs-9" tabindex="-1"
                                                   role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-multi-city"></i>', '#awe-search-tabs-9', ['id' => 'ui-id-9', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-2" aria-controls="awe-search-tabs-2" tabindex="-1"
                    role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-hotel"></i>', '#awe-search-tabs-2', ['id' => 'ui-id-2', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="true" aria-labelledby="ui-id-3" aria-controls="awe-search-tabs-3" tabindex="0"
                    role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-briefcase"></i>', '#awe-search-tabs-3', ['id' => 'ui-id-3', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-4" aria-controls="awe-search-tabs-4" tabindex="-1"
                    role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-bus"></i>', '#awe-search-tabs-4', ['id' => 'ui-id-4', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-5" aria-controls="awe-search-tabs-5" tabindex="-1"
                    role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-car"></i>', '#awe-search-tabs-5', ['id' => 'ui-id-5', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-6" aria-controls="awe-search-tabs-6" tabindex="-1"
                    role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="awe-icon awe-icon-train"></i>', '#awe-search-tabs-6', ['id' => 'ui-id-6', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
                <li aria-selected="false" aria-labelledby="ui-id-7" aria-controls="awe-search-tabs-7" tabindex="-1"
                    role="tab" class="ui-state-default ui-corner-top">
                    <?php echo $this->Html->link('<i class="fa awe-icon awe-icon-cruise"></i> ', '#awe-search-tabs-7', ['id' => 'ui-id-7', 'tabindex' => '-1', 'role' => 'presentation', 'class' => 'ui-tabs-anchor', 'escape' => false]); ?>
                </li>
            </ul>

            <div class="awe-search-tabs__content tabs__content">
                <?= $this->element("searching/flight"); ?>
            </div>
        </div>
    </div>
</section>

<section id="section-2" class="app_screen_area"><!-- Start: App Screens Area, "SECTION-2" -->
    <div class="fix overlay_color">
        <div class="container">
            <div class="row">
                <div class="app_screen wow fadeIn animated text-center" data-wow-offset="10" data-wow-duration="1.5s">
                    <!-- Start: App Screens Body Area -->
                    <h2 class="">Featured Festivals</h2><!-- App Screens Heading Goes Here -->

                    <div id="slider" class="slider"><!-- Start: Slider Area -->
                        <!-- App Screens Slide images Goes Here -->

                        <div class="item">

                            <a href="img/events/cochella-800x600.jpg" class="fancybox-thumbs"
                               data-fancybox-group="thumb">
                                <?php echo $this->Html->image('events/cochella-800x600.jpg'); ?>
                            </a>
                            <div class="item-info text-left">
                                <div class="item-details">
                                    <h4>
                                        <?php echo $this->Html->link('Cochella', 'https://www.fest300.com/festivals/coachella', ['target' => '_blank']); ?>
                                    </h4>
                                    <!--<h5><a href="cochella-2016-april-15-24-2016-indio-california.html" target="_blank">April 15-24, Indio California</a></h5>-->
                                </div>
                                <p>Music aficionados around the world know precisely where to be come April, and
                                    with </p>
                                <div class="item-time-rem">
                                    <i class="fa fa-clock-o"></i>
                                    <label>17 Hours remaining</label>
                                </div> <!-- item-time-rem -->
                                <div class="item-price-dis">
                                    <label class="item-mainprice">$82</label>
                                    <label class="item-regprice">$212</label>
                                    <label class="item-saveprice">Save 39%</label>
                                </div> <!-- item-prie-dis -->
                                <div class="item-location">
                                    <label><i class="fa fa-map-marker"></i> California</label>
                                </div> <!-- item-location -->
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/events/lollapalooza-800x600.jpg" class="fancybox-thumbs"
                               data-fancybox-group="thumb">
                                <?php echo $this->Html->image('events/lollapalooza-800x600.jpg', ['alt' => '']); ?>
                            </a>
                            <div class="item-info  text-left">
                                <div class="item-details">
                                    <h4>
                                        <?php echo $this->Html->link('Lollapalooza', ['controller' => 'blogs', 'action' => 'lollapaloozaChicago'], ['target' => '_blank']); ?>
                                    </h4>
                                    <!--<h5><a href="lollapalooza-2016-mar-18-mar-19-2016-grand-park-chicago.html" target="_blank">Mar 18-19,Grand Park Chicago </a></h5>-->
                                </div>
                                <p>Thousands of fans trek to Chicago's Grant Park each year for one of the hottest
                                </p>
                                <div class="item-time-rem">
                                    <i class="fa fa-clock-o"></i>
                                    <label>17 Hours remaining</label>
                                </div> <!-- item-time-rem -->
                                <div class="item-price-dis">
                                    <label class="item-mainprice">$82</label>
                                    <label class="item-regprice">$212</label>
                                    <label class="item-saveprice">Save 39%</label>
                                </div> <!-- item-prie-dis -->
                                <div class="item-location">
                                    <label><i class="fa fa-map-marker"></i> Chicago</label>
                                </div> <!-- item-location -->
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/events/afrikaburn-800x600.jpg" class="fancybox-thumbs"
                               data-fancybox-group="thumb">
                                <?php echo $this->Html->image('events/afrikaburn-800x600.jpg'); ?>
                            </a>
                            <div class="item-info  text-left">
                                <div class="item-details">
                                    <h4>
                                        <?php echo $this->Html->link('Afrikaburn', 'https://www.fest300.com/festivals/afrikaburn', ['target' => '_blank']); ?>
                                    </h4>
                                    <!--<h5><a href="afrikaburn-2016-april-25-may-1-tankwa-south-africa.html" target="_blank">April 25­-May 1, Tankwa  South Africa </a></h5>-->
                                </div>
                                <p>AfrikaBurn is the spectacular result of the creative expression of participants who
                                </p>
                                <div class="item-time-rem">
                                    <i class="fa fa-clock-o"></i>
                                    <label>17 Hours remaining</label>
                                </div> <!-- item-time-rem -->
                                <div class="item-price-dis">
                                    <label class="item-mainprice">$82</label>
                                    <label class="item-regprice">$212</label>
                                    <label class="item-saveprice">Save 39%</label>
                                </div> <!-- item-prie-dis -->
                                <div class="item-location">
                                    <label><i class="fa fa-map-marker"></i> South Africa</label>
                                </div> <!-- item-location -->
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/events/palio-de-siena-800x600.jpg" class="fancybox-thumbs"
                               data-fancybox-group="thumb">
                                <?php echo $this->Html->image('events/palio-de-siena-800x600.jpg'); ?>
                            </a>
                            <div class="item-info  text-left">
                                <div class="item-details">
                                    <h4>
                                        <?php echo $this->Html->link('Palio de Siena', ['controller' => 'blogs', 'action' => 'palioSiena'], ['target' => '_blank']); ?>
                                    </h4>
                                    <!--<h5><a href="palio-di-siena-2016.html" target="_blank">July 2 &amp; Aug 16, Italy</a></h5>-->
                                </div>
                                <p>The Palio di Siena (known locally simply as Il Palio) is a horse race that is held
                                    twice
                                </p>
                                <div class="item-time-rem">
                                    <i class="fa fa-clock-o"></i>
                                    <label>17 Hours remaining</label>
                                </div> <!-- item-time-rem -->
                                <div class="item-price-dis">
                                    <label class="item-mainprice">$82</label>
                                    <label class="item-regprice">$212</label>
                                    <label class="item-saveprice">Save 39%</label>
                                </div> <!-- item-prie-dis -->
                                <div class="item-location">
                                    <label><i class="fa fa-map-marker"></i> Italy</label>
                                </div> <!-- item-location -->
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/events/snowbombing-800x600.jpg" class="fancybox-thumbs"
                               data-fancybox-group="thumb">
                                <?php echo $this->Html->image('events/snowbombing-800x600.jpg'); ?>
                            </a>
                            <div class="item-info  text-left">
                                <div class="item-details">
                                    <h4>
                                        <?php echo $this->Html->link('Snowbombing', ['controller' => 'blogs', 'action' => 'snowbombingAustria'], ['target' => '_blank']); ?>
                                    </h4>
                                    <!--<h5><a href="snowbombing-2016-apr-4-apr-9-2016-mayrhofen-austria.html" target="_blank">Apr 4-9, Mayrhofen, Austria</a></h5>-->
                                </div>
                                <p>A festival filled with fresh air, blue skies, black runs and white-hot parties...
                                </p>
                                <div class="item-time-rem">
                                    <i class="fa fa-clock-o"></i>
                                    <label>17 Hours remaining</label>
                                </div> <!-- item-time-rem -->
                                <div class="item-price-dis">
                                    <label class="item-mainprice">$82</label>
                                    <label class="item-regprice">$212</label>
                                    <label class="item-saveprice">Save 39%</label>
                                </div> <!-- item-prie-dis -->
                                <div class="item-location">
                                    <label><i class="fa fa-map-marker"></i> Austria</label>
                                </div> <!-- item-location -->
                            </div>
                        </div>

                    </div><!-- End: "slider" Area -->
                    <a href="#" class="btn btn-white btn-lg btn-ghost">Explore more</a>
                    <!--<div class="customNavigation">
                        <a class="btn prev">Previous</a>
                        <a class="btn next">Next</a>
                        <a class="btn play">Autoplay</a>
                        <a class="btn stop">Stop</a>
                    </div>-->

                </div><!-- Start: App Screens Body Area -->
            </div><!-- End: "row" -->
        </div><!-- End:  "container"-->
    </div><!--End:  Overlay Color-->
</section><!-- End: App Screens Area, "SECTION-2" -->

<section id="newdeals">
    <div class="container">
        <div class="row">
            <h2 class="text-center heading"> Travel Deals Around the Globe </h2>

            <?php foreach ($tour as $tours) {
                 if (!empty($tours->tour_images)) {
                    $tourImage = $tours->tour_images['0']->logo;
                } else {
                    $tourImage = 'default.jpg';
                }
                ?>
                <?php
                $now = time();
                if(!empty($tours->end_date)){
                $your_date = strtotime($tours->end_date->format('Y-m-d'));
                $remaining = ($your_date - $now) / 3600;

                if ($remaining > 36) {
                    $remaining_time = intval($remaining / 24) . " Days remaining";
                } else {
                    $remaining_time = intval($remaining) . " Hours remaining";
                }
                }
                ?>

                <div class="col-md-2 col-sm-4">
                    <div class="item newitems">
                        <a href="tours/tour_details/<?php echo $tours->productCode; ?>" >
                            <?php echo $this->Html->image($tourImage,['style'=>'height: 122px; width: 100%']); ?>
                        </a>
                        <div class="item-info text-left">
                            <div class="item-details">
                                <h4>
                                    <?php echo $this->Html->link($tours->title, ['controller' => 'blogs', 'action' => 'blog_detail', base64_encode($tours->id)], ['data-toggle' => 'modal', 'data-target' => '#subscription']); ?>
                                </h4>
                                <!--<h5><a href="cochella-2016-april-15-24-2016-indio-california.html" target="_blank">April 15-24, Indio California</a></h5>-->
                            </div>
                            <p><?php echo substr(strip_tags($tours->description), 0 ,50); ?></p>
                            <div class="item-time-rem">
                                <i class="fa fa-clock-o"></i>

                                <label><?php echo @$remaining_time; ?></label>
                            </div> <!-- item-time-rem -->
                            <div class="item-price-dis">
                                <label class="item-mainprice"><?php echo ($tours->price * 39) / 100; ?></label>
                                <label class="item-regprice">$<?php echo $tours->price; ?></label>
                                <label class="item-saveprice">Save 39%</label>

                            </div> <!-- item-prie-dis -->
                            <div class="item-location">
                                <label><i class="fa fa-map-marker"></i> <?php echo $tours->city; ?></label>
                            </div> <!-- item-location -->
                        </div>
                    </div>
                </div> <!-- col-md-2 -->
            <?php } ?>
            <div class="col-md-12 text-center">
                <a href="" class="btn btn-lg btn-ghost trdeal">Explore All New Deals</a>
            </div> <!-- col-md-12 -->
        </div> <!-- row -->
    </div> <!-- container -->
</section>  <!-- newdeals -->

<section id="section-4" class="contact"><!-- Start:  Contact Area, "SECTION-4" -->
    <div class="contact_body">
        <div class="map" id="map"><!-- Start: Google Map Area, "Part-1-Up" "map" -->

        </div><!-- End: Google Map Area, "map" -->

        <!-- Start: Map Show Button -->

        <!-- End: Map Show Button -->


       <!-- End: Contact Form Area, "Part-2-Down" "contact_background"  -->
    </div><!-- End: "contact_body"  -->
</section><!-- End:  Contact Area, "SECTION-4" -->
<script>
    $(document).ready(function(){
          // $("#flight").show(1000);
           $(".ui-state-default").click(function(){
               var way=$(this).attr('aria-labelledby');
               $.ajax({
                   async :false,
                   url:"<?php echo $this->Url->build(['controller'=>'Flights','action'=>'getFlightSearchData']);?>",
                   type: "POST",
                   data: {'way_type': way},
                   success: function (resp) {
                       $(".awe-search-tabs__content").html(resp);
                   }
               });
           });
       });

</script>