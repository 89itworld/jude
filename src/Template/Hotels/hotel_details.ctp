<div id="page-wrapper">
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Hotel Detailed</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li class="active">Hotel Detailed</li>
            </ul>
        </div>
    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div id="main" class="col-md-9">
                    <div class="tab-container style1" id="hotel-main-content">
                        <ul class="tabs">
                            <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                            <li><a data-toggle="tab" href="#map-tab">map</a></li>
                           
                            <li class="pull-right"><a class="button btn-small yellow-bg white-color" href="#">TRAVEL GUIDE</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="photos-tab" class="tab-pane fade in active">
                                <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">
                                    <ul class="slides">
                                        <?php
                                        //   pr($hotelDetails); die;



                                        foreach($hotelDetails['HotelImages']['HotelImage'] as $image){
                                            $img = str_replace('b','z',$image['url']);
//                                            if (@getimagesize(str_replace('b','z',$image['url'])) !== false) {
//                                                $img = str_replace('b','z',$image['url']);
//                                            }else{
//                                                $img = $image['url'];
//                                            }
                                            ?>
                                            <li><img src="<?php echo $img; ?>" alt="<?php echo $image['caption']; ?>" /></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">
                                    <ul class="slides">
                                        <?php foreach($hotelDetails['HotelImages']['HotelImage'] as $image){ ?>
                                            <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['caption']; ?>" /></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <?php echo $this->element('travelo/map');?>
                            <div id="steet-view-tab" class="tab-pane fade" style="height: 500px;">
                            </div>
                        </div>
                    </div>

                    <div id="hotel-features" class="tab-container">
                        <ul class="tabs">
                            <li class="active"><a href="#hotel-description" data-toggle="tab">Description</a></li>
                            <li><a href="#hotel-availability" onclick="availability()" data-toggle="tab">Availability</a></li>
<!--                            <li><a href="#hotel-things-todo" data-toggle="tab">Things to Do</a></li>-->

                        </ul>
                        <div class="tab-content">
                    <!--Tab Hotel Description-->
                            <div class="tab-pane fade in active" id="hotel-description">
                                <div class="intro table-wrapper full-width hidden-table-sms">
                                    <div class="col-sm-5 col-lg-4 features table-cell">
                                        <ul>
                                            <li><label>hotel type:</label><?php echo $hotelDetails['HotelSummary']['hotelRating']; ?> star</li>
                                            <li><label>City:</label><?php echo $hotelDetails['HotelSummary']['city']; ?></li>
                                            <li><label>Country:</label><?php echo $hotelDetails['HotelSummary']['countryCode']; ?></li>
                                            <li><label>Number Of Rooms:</label><?php echo @$hotelDetails['HotelDetails']['numberOfRooms']; ?></li>
                                            <li><label>Number Of Floors:</label><?php echo @$hotelDetails['HotelDetails']['numberOfFloors']; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7 col-lg-8 table-cell testimonials">
                                        <div class="testimonial style1">
                                            <ul class=" ">
                                                <li>
                                                    <p class="description">
                                                        <?php echo @$hotelDetails['HotelDetails']['locationDescription']; ?>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="long-description">
                                    <h2>About <?php echo $hotelDetails['HotelSummary']['name']; ?></h2>
                                    <p>

                                        <?php echo @$hotelDetails['HotelDetails']['diningDescription']; ?>
                                        <br /><br />
                                        <?php echo @$hotelDetails['HotelDetails']['amenitiesDescription']; ?>
                                        <br /><br />
                                        <?php echo @$hotelDetails['HotelDetails']['businessAmenitiesDescription']; ?>
                                        <br /><br />
                                        <?php echo @$hotelDetails['HotelDetails']['roomDetailDescription']; ?>
                                    </p>
                                </div>
                            </div>
                    <!--End tab Hotel Description-->

                  <!--Tab Hotel Avalability-->
                            <div class="tab-pane fade" id="hotel-availability">
                                <form>
                                    <div class="update-search clearfix">
                                        <div class="col-md-5">
                                            <h4 class="title">When</h4>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label>CHECK IN</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_from" placeholder="mm/dd/yy" class="input-text full-width" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <label>CHECK OUT</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_to" placeholder="mm/dd/yy" class="input-text full-width" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4 class="title">Who</h4>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label>ROOMS</label>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>ADULTS</label>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>KIDS</label>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <h4 class="visible-md visible-lg">&nbsp;</h4>
                                            <label class="visible-md visible-lg">&nbsp;</label>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button data-animation-duration="1" data-animation-type="bounce" class="full-width icon-check animated" type="submit">SEARCH NOW</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="availability_list"></div>
                            </div>
                  <!--End Tab   -->

                    <!--Hotel amenities-->
                            <div class="tab-pane fade" id="hotel-amenities">
                                <h2>Amenities Style 01</h2>

                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <ul class="amenities clearfix style1">
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-wifi"></i>WI_FI</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-swimming"></i>swimming pool</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-television"></i>television</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-coffee"></i>coffee</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-aircon"></i>air conditioning</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-fitnessfacility"></i>fitness facility</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-fridge"></i>fridge</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-winebar"></i>wine bar</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-smoking"></i>smoking allowed</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-entertainment"></i>entertainment</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-securevault"></i>secure vault</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-pickanddrop"></i>pick and drop</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-phone"></i>room service</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-pets"></i>pets allowed</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-playplace"></i>play place</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-breakfast"></i>complimentary breakfast</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-parking"></i>Free parking</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-conference"></i>conference room</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-fireplace"></i>fire place</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-handicapaccessiable"></i>Handicap Accessible</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-doorman"></i>Doorman</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-tub"></i>Hot Tub</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-elevator"></i>Elevator in Building</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-star"></i>Suitable for Events</div>
                                    </li>
                                </ul>
                                <br />

                                <h2>Amenities Style 02</h2>
                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <ul class="amenities clearfix style2">
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-wifi circle"></i>WI_FI</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-swimming circle"></i>swimming pool</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-television circle"></i>television</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-coffee circle"></i>coffee</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-aircon circle"></i>air conditioning</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-fitnessfacility circle"></i>fitness facility</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-fridge circle"></i>fridge</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-winebar circle"></i>wine bar</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-smoking circle"></i>smoking allowed</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-entertainment circle"></i>entertainment</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-securevault circle"></i>secure vault</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-pickanddrop circle"></i>pick and drop</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-phone circle"></i>room service</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-pets circle"></i>pets allowed</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-playplace circle"></i>play place</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-breakfast circle"></i>complimentary breakfast</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-parking circle"></i>Free parking</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-conference circle"></i>conference room</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-fireplace circle"></i>fire place</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-handicapaccessiable circle"></i>Handicap Accessible</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-doorman circle"></i>Doorman</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-tub circle"></i>Hot Tub</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-elevator circle"></i>Elevator in Building</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style2"><i class="soap-icon-star circle"></i>Suitable for Events</div>
                                    </li>
                                </ul>
                            </div>
                    <!--end Tab   -->

                        </div>

                    </div>
            </div>

                <div class="sidebar col-md-3">
                    <article class="detailed-logo">
                        <figure>
                            <?php echo $this->Html->image($hotelDetails['HotelImages']['HotelImage'][0]['url'],['width'=>'114','height'=>'85','alt'=>'']); ?>

                        </figure>
                        <div class="details">
                            <h2 class="box-title"><?php echo $hotelDetails['HotelSummary']['name']; ?><small><i class="soap-icon-departure yellow-color"></i><span class="fourty-space"><?php echo $hotelDetails['HotelSummary']['city'].", ". $hotelDetails['HotelSummary']['countryCode']; ?></span></small></h2>
                                <span class="price clearfix">
                                    <small class="pull-left">avg/night</small>
                                    <span class="pull-right">
                                        <?php
                                        $price = $this->Number->precision($hotels['hotel_price']['base_price'] ,0);
                                        $price = $this->Number->format($price, array('thousands' => ','));
                                          echo "$".$price ;
                                        ?></span>
                                </span>
                            <div class="feedback clearfix">
<!--                                <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom">-->
<!--                                    <span class="five-stars" style="width: 80%;"></span>-->
<!--                                </div>-->
                                <?php echo (@$hotelDetails['HotelSummary']['tripAdvisorRatingUrl'])?$this->Html->image(@$hotelDetails['HotelSummary']['tripAdvisorRatingUrl']):'No Review'; ?>
                                <span class="review pull-right"><?php echo @$hotelDetails['HotelSummary']['tripAdvisorReviewCount']; ?> reviews</span>
                            </div>
                            <p class="description"><?php echo @$hotelDetails['HotelDetails']['locationDescription']; ?></p>
                            <a class="button yellow full-width uppercase btn-small">add to wishlist</a>
                        </div>
                    </article>

                    <div class="travelo-box">
                        <h4>Similar Listings</h4>
                        <div class="image-box style14">
                            <?php foreach($hotel_list as $list){?>
                            <article class="box">
                                <figure>
                                    <?php echo $this->Html->link($this->Html->image(@$list['image_url']),['controller'=>'Hotels','action'=>'hotel_details',$list['expedia_hotel_id']],['escape'=>false]); ?>
                                </figure>
                                <div class="details">
                                    <h5 class="box-title">
                                        <?php echo $this->Html->link($list['name'],['controller'=>'Hotels','action'=>'hotel_details',$list['expedia_hotel_id']],['escape'=>false]); ?>

                                    <label class="price-wrapper">
                                        <span class="price-per-unit">
                                            <?php
                                            $price = $this->Number->precision($list['hotel_price']['total_price'] ,0);
                                            $price = $this->Number->format($price, array('thousands' => ','));
                                            echo "$".$price ;
                                            ?></span>avg/night
                                    </label>
                                </div>
                            </article>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>

    function availability(){
        var hotelId = "<?php echo $hotelDetails['HotelSummary']['hotelId']; ?>";
        tjq.ajax({
            type:"POST",
            url: "<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'available']); ?>",
             data: {id:hotelId},

            success: function(response){
               // console.log(response);

                tjq('#availability_list').html('');
          //      alert('this is work');
               // alert(response);
                tjq("#availability_list").append(response);
            }
        });
    }
</script>
