<!-- HEADING PAGE -->
<!--<section class="awe-parallax category-heading-section-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content category-heading-content__2 text-uppercase">
            <div class="find">
                <h2 class="text-center">Find Your Hotels</h2>
                <?php /*echo $this->Form->create('hotels',['method'=>'type','url'=>['contorller'=>'Hotles','action'=>'index']]); */?>
                <div class="form-group">
                    <div class="col-md-2">
                        <div class="form-elements width-100 no-padding">
                            <label for="destination">From</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-marker-1"></i>
                                <?php /*echo $this->Form->input('destination',['type'=>'text','id'=>'destination','placeholder'=>'City, state','label'=>false,'required'=>'required']); */?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-elements width-100 no-padding">
                            <label for="date_from">Check in</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <?php /*echo $this->Form->input('date_from',['type'=>'text','id'=>'date_from','class'=>'awe-calendar','placeholder'=>'yyyy-mm-dd','label'=>false,'required'=>'required']); */?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-elements width-100 no-padding">
                            <label for="date_to">Check out</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <?php /*echo $this->Form->input('date_to',['type'=>'text','id'=>'date_to','class'=>'awe-calendar','placeholder'=>'yyyy-mm-dd','label'=>false,'required'=>'required']); */?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-elements width-100 no-padding">
                            <label>Adults</label>
                            <div class="form-item">
                                <?php /*echo $this->Form->input('adults', array(
                                    'options' => array(
                                        ''=>'--select--',
                                        '1'=>'1',
                                        '2'=>'2',
                                        '3'=>'3'),
                                    'class'=>'awe-select',
                                    'label'=>false,
                                )); */?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-elements width-100 no-padding">
                            <label>Kids</label>
                            <div class="form-item">
                                <?php /*echo $this->Form->input('kids', array(
                                    'options' => array(
                                        ''=>'--select--',
                                        '1'=>'1',
                                        '2'=>'2',
                                        '3'=>'3'),
                                    'class'=>'awe-select',
                                    'label'=>false,
                                )); */?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-actions">
                            <?php /*echo $this->Form->input('Find My Hotels',['class'=>'btn-block','type'=>'submit']); */?>
                        </div>
                    </div>

                </div>
                <?php /*echo $this->Form->end(); */?>
            </div>
        </div>
    </div>
</section>-->
<!-- END / HEADING PAGE -->


    <section class="filter-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-top">
                        <h5 class="flight_search_trv">Result Shown for hotel in <?= ucwords($search_detail["destination"]); ?><em>  (<?= $search_detail["date_from"]; ?> - <?= $search_detail["date_to"]; ?>) for <?= $search_detail["adults"]; ?> adults <!--in 1 room-->
                        </em></h5>
                        <select class="awe-select">
                            <option>Best Match</option>
                            <option>Best Rate</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-9 col-md-push-3" id="HotelList">
                    <div class="filter-page__content">

                        <div class="filter-item-wrapper">

                            <?php

                            if(($hotel_data->isEmpty())){
                                echo '<p class="hotel_error_msg">No hotels were found which match your search criteria.</p>';
                            }else {
                                foreach ($hotel_data as $hotels_details) {
//                                    pr($hotels_details);
                                    ?>
                                    <!-- ITEM -->
                                    <div class="hotel-item">
                                        <div class="item-media">
                                            <div class="image-cover">
                                                <?php echo $this->Html->image($hotels_details['image_url']); ?>
                                            </div>
                                        </div>
                                        <div class="item-body">
                                            <div class="item-title">
                                                <h2>
                                                    <?php echo $this->Html->link($hotels_details['name'],$hotels_details['expedia_link'],['target'=>'_blank']); ?>
                                                </h2>
                                            </div>
                                            <div class="item-hotel-star">
                                                <div class="stars-box">
                                                    <div class='rating_bar' id="avg_rating">
                                                        <div class='rating' style="width:<?php echo $hotels_details['star_rating']*2*10 .'%'; ?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-address">
                                                <i class="awe-icon awe-icon-marker-2"></i>
                                                <?php echo $hotels_details['hotel_address']['city'].', '.$hotels_details['hotel_address']['country']; ?>
                                            </div>
                                            <div class="item-footer">
                                                <div class="item-rate">
                                                    <?php echo ($hotels_details['total_review']>0)?"<span class=\"item-address\">".$hotels_details['review']." out fo 5</span>
                                                    <span> (" .$hotels_details['total_review']." Reviews)</span>":''?>
                                                </div>
                                                <div class="item-icon">

                                                    <?php echo ($hotels_details['free_parking']=='true'?'<i class="awe-icon awe-icon-car" data-toggle="tooltip" title="Free Parking Available"></i>':'');?>

                                                    <?php echo ($hotels_details['free_breakfast']=='true'?'<i class="awe-icon awe-icon-food" data-toggle="tooltip" title="Free Breakfast Available"></i>':'');?>

                                                    <?php echo ($hotels_details['Free_internet']=='true'?'<i class="awe-icon awe-icon-wifi" data-toggle="tooltip" title="Free Internet Available"></i>':'');?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-price-more">
                                            <div class="price">
                                                one night from
                                                <?php echo ($hotels_details['remaining_count']>0)?"<p  class='offer'>We have ".$hotels_details['remaining_count']."left at.</p>":''; ?>
                                                <span class="amount">$<?php echo $hotels_details['hotel_price']['base_price']; ?></span>
                                                <p class="offer"><?php echo $hotels_details['hotel_price']['offer']; ?></p>
                                            </div>

                                            <?php echo $this->Html->link('Book now',$hotels_details['expedia_link'],['class'=>'awe-btn','target'=>'_blank']);?>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                <?php } } ?>
                        </div>

                        <!-- PAGINATION -->
                        <div class="page__pagination">
                            <?php
                            $this->Paginator->templates([
                                'number' => '<a href="{{url}}">{{text}}</a>',
                                'nextActive'=>'<a href="{{url}}"><i class="fa fa-caret-right"></i></a>',
                                'prevActive'=>'<a href="{{url}}"><i class="fa fa-caret-left"></i></a>',
                                'current'=>'<span class="current">{{text}}</span>',
                                'nextDisabled'=>'<i class="fa fa-caret-right"></i>',
                                'prevDisabled'=>'<i class="fa fa-caret-left"></i>'
                            ]);
                            echo $this->Paginator->prev();
                            echo $this->Paginator->numbers();
                            echo $this->Paginator->next();
                            ?>
                        </div>
                        <!-- END / PAGINATION -->
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9">
                    <div class="page-sidebar">
                        <div class="sidebar-title">
                            <h2>Hotel filter</h2>
                            <div class="clear-filter">
                                <a href="#">Clear all</a>
                            </div>
                        </div>

                        <!-- WIDGET -->
                        <div class="widget widget_has_radio_checkbox">
                            <h3>Star Rating</h3>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox" class="starRating" value="5" name="star_rating[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="starRating" value="4" name="star_rating[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="starRating" value="3" name="star_rating[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="starRating" value="2" name="star_rating[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="starRating" value="1" name="star_rating[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <!-- END / WIDGET -->
                        <!-- WIDGET -->
                        <div class="widget widget_price_filter">
                            <h3>Price Level</h3>
                            <div class="price-slider-wrapper">
                                <div class="price-slider"></div>
                                <div class="price_slider_amount">
                                    <div class="price_label">
                                        <span class="from"></span> - <span class="to"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET -->

                        <!-- WIDGET -->
                        <div class="widget widget_has_radio_checkbox">
                            <h3>Hotel Type</h3>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox"  value="Hotel"  class="hotelType" name="hotelType[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Hotel
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="hotelType" value="Hostel" name="hotelType[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Hostel
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="hotelType" value="Motel" name="hotelType[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Motel
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="hotelType" value="Homestay" name="hotelType[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Homestay
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="hotelType" value="Apartments" name="hotelType[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Apartments
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <!-- END / WIDGET -->

                        <!-- WIDGET -->
                      <!--  <div class="widget widget_has_radio_checkbox">
                            <h3>Distance</h3>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Near Airport
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Near Shopping District
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Near Attractions
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Near Traffic station
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <!-- END / WIDGET -->

                        <!-- WIDGET -->
                       <!-- <div class="widget widget_has_radio_checkbox">
                            <h3>Service Include</h3>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Room service
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Laundry
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Meal at room
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Wifi &amp; internet
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Parking lot
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        TV and appliances
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Pool
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Gym and Spa
                                    </label>
                                </li>
                            </ul>
                        </div>-->
                        <!-- END / WIDGET -->

                        <!-- WIDGET -->
                        <div class="widget widget_product_tag_cloud">
                            <h3>Tags</h3>
                            <div class="tagcloud">
                                <a href="#">Hotel</a>
                                <a href="#">Motel</a>
                                <a href="#">Hostel</a>
                                <a href="#">Homestay</a>
                            </div>
                        </div>
                        <!-- END / WIDGET -->

                    </div>
                </div>
            </div>
        </div>

    </section>
<div id="loading" style="display:none;" >
    <?php echo $this->Html->image('ajax_loader.gif',array('id'=>'loading-image')); ?>
</div>

<script>
    $('.starRating').change(function(e){
        e.preventDefault();
        var matches = [];
        $(".starRating:checked").each(function() {
            matches.push(this.value);
        });
        var matches_type = [];
        $(".hotelType:checked").each(function() {
            matches_type.push(this.value);
        });
        var minPrice = $('.from').text();
        var maxPrice = $('.to').text();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,star_rating:matches,type_hotel:matches_type},
            beforeSend: function(){
                $('#loading').css('display','block');
            },
            success: function(response){
                console.log(response);
                $('#HotelList').html('');
                $("#HotelList").append(response);
                $('#loading').css('display','none');
            }
        });
    });

    $('.price-slider').mouseup(function(e){

        e.preventDefault();
        var matches = [];
        $(".starRating:checked").each(function() {
            matches.push(this.value);
        });
        var matches_type = [];
        $(".hotelType:checked").each(function() {
            matches_type.push(this.value);
        });
        var minPrice = $('.from').text();
        var maxPrice = $('.to').text();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,star_rating:matches,type_hotel:matches_type},
            beforeSend: function(){
                $('#loading').css('display','block');
            },
            success: function(response){
                console.log(response);
                $('#HotelList').html('');
                $("#HotelList").append(response);
                $('#loading').css('display','none');
            }
        });
    });
/*Added by yasar 27-Apr-2016*/
    $('.hotelType').change(function(e){
        e.preventDefault();
        var matches = [];
        $(".starRating:checked").each(function() {
            matches.push(this.value);
        });
        var matches_type = [];
        $(".hotelType:checked").each(function() {
            matches_type.push(this.value);
        });
        var minPrice = $('.from').text();
        var maxPrice = $('.to').text();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,star_rating:matches,type_hotel:matches_type},
            beforeSend: function(){
                $('#loading').css('display','block');
            },
            success: function(response){
                console.log(response);
                $('#HotelList').html('');
                $("#HotelList").append(response);
                $('#loading').css('display','none');
            }
        });
    });

</script>
