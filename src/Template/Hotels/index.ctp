<style>
    .filters-container ul.filters-option li::before{display: none}
    .trvfilter li{display: block;padding: 8px 15px!important;text-transform: uppercase;font-size: 11px;}
    .trvfilter li input{float:left;margin:5px 7px 0 0!important}
    .trvfilter li label{float: left}
    .activefilter{background:#01b7f2!important;color:#fff}
</style>
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">Hotel Search Results</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li class="active">Hotel Search Results</li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="container">
        <div id="main">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <h4 class="search-results-title"><i class="soap-icon-search"></i><b>1,984</b> results found.</h4>
                    <div class="toggle-container filters-container">
                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#price-filter" class="collapsed">Price</a>
                            </h4>
                            <div id="price-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <div id="price-range"></div>
                                    <br />
                                    <span class="min-price-label pull-left"></span>
                                    <span class="max-price-label pull-right"></span>
                                    <div class="clearer"></div>
                                </div><!-- end content -->
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#rating-filter" class="collapsed">User Rating</a>
                            </h4>
                            <div id="rating-filter" class="panel-collapse collapse filters-container">
                                <div class="panel-content">
                                   <ul class="check-square filters-option trvfilter" id="hotels_type">
                                    <li>
                                        <input type="checkbox" id="5star" class="starRating" value="5" name="star_rating[]">
                                        <label for="5star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="4star" class="starRating" value="4" name="star_rating[]">
                                        <label for="4star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="3star" class="starRating" value="3" name="star_rating[]">
                                        <label for="3star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="2star" class="starRating" value="2" name="star_rating[]">
                                        <label for="2star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="1star" class="starRating" value="1" name="star_rating[]">
                                        <label for="1star">
                                            <i class="fa fa-star"></i>
                                        </label>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#accomodation-type-filter" class="collapsed">Hotle Type</a>
                            </h4>
                            <div id="accomodation-type-filter" class="panel-collapse collapse">
                                <div class="panel-content">

                                    <ul class="check-square filters-option trvfilter" id="hotels_type">
                                        <li>
                                            <input type="checkbox" id="hotel" class="hotelType" value="Hotel" name="hotelType[]"> <label for="hotel">Hotel</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hostel" class="hotelType" value="Hostel" name="hotelType[]"> <label for="hostel">Hostel</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="motel" class="hotelType" value="Motel" name="hotelType[]"> <label for="motel">Motel</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="homestay" class="hotelType" value="Homestay" name="hotelType[]"> <label for="homestay">Homestay</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="apartments" class="hotelType" value="Apartments" name="hotelType[]"> <label for="apartments">Apartments</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                            </h4>

                            <div id="modify-search-panel" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <form method="post" action="/hotels">
                                        <div class="form-group">
                                            <label>destination</label>
                                            <input type="text" name="destination" value="<?php echo @$search_detail['destination']; ?>" class="input-text full-width" placeholder="Paris" />
                                        </div>
                                        <div class="form-group">
                                            <label>check in</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_from" value="<?php echo @$search_detail['date_from']; ?>" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>check out</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_to" value="<?php echo @$search_detail['date_to']; ?>" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <?php echo $this->Form->input('adults',['value'=>$search_detail['adults'],'type'=>'hidden']);?>
                                        <?php echo $this->Form->input('kids',['value'=>$search_detail['kids'],'type'=>'hidden']);?>
                                        <br />
                                        <button class="btn-medium icon-check uppercase full-width">search again</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="sort-by-section clearfix">
                        <h4 class="sort-by-title block-sm">Sort results by:</h4>
                        <ul class="sort-bar clearfix block-sm">
                            <li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
                            <li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
                            <li class="clearer visible-sms"></li>
                            <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>rating</span></a></li>
                            <li class="sort-by-popularity"><a class="sort-by-container" href="#"><span>popularity</span></a></li>
                        </ul>

                        <ul class="swap-tiles clearfix block-sm">
                            <li class="swap-list active">
                                <a href="#"><i class="soap-icon-list"></i></a>
                            </li>
                            <li class="swap-grid">
                                <a href="#"><i class="soap-icon-grid"></i></a>
                            </li>
                            <li class="swap-block">
                                <a href="#"><i class="soap-icon-block"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="hotel-list listing-style3 hotel">
                        <?php
                        if(empty($hotel_data)){
                            echo '<p class="hotel_error_msg">No hotels were found which match your search criteria.</p>';
                        }else {
                            foreach ($hotel_data as $hotels_details) {?>

                            <article class="box">
                                <figure class="col-sm-5 col-md-4">
                                        <?php echo $this->Html->image($hotels_details['image_url']); ?>
                                </figure>
                                <div class="details col-sm-7 col-md-8">
                                    <div>
                                        <div>
                                            <h4 class="box-title"
                                            ><?php echo $this->Html->link($hotels_details['name'],'#'); ?>
                                                <small><i class="soap-icon-departure yellow-color"></i>
                                                    <?php echo $hotels_details['city'].', '.$hotels_details['country']; ?>
                                                </small></h4>

                                            <div class="amenities">
                                                <?php echo ($hotels_details['free_parking']=='true'?'<i class="soap-icon-car circle" data-toggle="tooltip" title="Free Parking Available"></i>':'');?>

                                                <?php echo ($hotels_details['free_breakfast']=='true'?'<i class="soap-icon-fork circle" data-toggle="tooltip" title="Free Breakfast Available"></i>':'');?>

                                                <?php echo ($hotels_details['Free_internet']=='true'?'<i class="soap-icon-wifi circle" data-toggle="tooltip" title="Free Internet Available"></i>':'');?>
                                            </div>
                                        </div>
                                        <div>
                                            <div class='rating_bar' id="avg_rating">
                                                <div class='rating' style="width:<?php echo $hotels_details['review']*2*10 .'%'; ?>"></div>
                                            </div>
                                            <span class="review"><?php  echo $hotels_details['total_review']; ?> reviews</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p><?php echo strip_tags($hotels_details['description']).'...';?></p>
                                        <div>
                                            <span class="price" data-toggle="tooltip" title="This is the Average price for your dates">
                                                <small>AVG/NIGHT</small>
                                                <?php
                                                $price = $this->Number->precision($hotels_details['hotel_price']['base_price'],0);
                                                $price = $this->Number->format($price, array('thousands' => ','));
                                                echo "$".$price; ?>
                                            </span>

                                            <span style="font-size: 11px; color: rgb(94, 147, 13);" class="green-text">
                                                <?php echo ($hotels_details['freeCancellation']=="true")?"<i class='fa fa-check'></i> FREE cancellation":''?>
                                            </span>
                                            <br>
                                            <span><?php echo ($hotels_details['roomAbaility']<6 AND $hotels_details['roomAbaility']>0)?$hotels_details['roomAbaility']." left":''?></span>

                                            <?php echo $this->Html->link('SELECT',['controller'=>'Hotels','action'=>'hotel_details',$hotels_details['expedia_hotel_id']],['class'=>'button btn-small full-width text-center','target'=>'_blank']);?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="loading" style="display:none;" >
    <?php echo $this->Html->image('ajax_loader.gif',array('id'=>'loading-image')); ?>
</div>
<script type="text/javascript">

    $('.starRating').change(function(e){
        tjq('.starRating').parent('li').removeClass('activefilter');

        e.preventDefault();

        var matches = [];
        tjq(".starRating:checked").each(function() {
            matches.push(this.value);
        });

        var matches_type = [];
        tjq(".hotelType:checked").each(function() {
            matches_type.push(this.value);
            tjq(this).parent('li').addClass('activefilter');
        });

        var minPrice = tjq(".min-price-label").text();
        var maxPrice =  tjq(".max-price-label").html();

        tjq.ajax({
            type:"POST",
            url: "<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,star_rating:matches,type_hotel:matches_type,layout:'travelo'},
            beforeSend: function(){
                tjq('#loading').css('display','block');
            },
            success: function(response){
                console.log(response);
                tjq('.hotel-list').html('');
                tjq(".hotel-list").append(response);
                tjq('#loading').css('display','none');
            }
        });
   });

    $('#price-range').click(function(e){

        e.preventDefault();

        var matches = [];
        tjq(".starRating:checked").each(function() {
            matches.push(this.value);
        });

        var matches_type = [];
        tjq(".hotelType:checked").each(function() {
            matches_type.push(this.value);
        });

        var minPrice = tjq(".min-price-label").text();
        var maxPrice =  tjq(".max-price-label").html();

        tjq.ajax({
            type:"POST",
           url: "<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,star_rating:matches,type_hotel:matches_type,layout:'travelo'},
            beforeSend: function(){
                tjq('#loading').css('display','block');
            },
            success: function(response){
                console.log(response);
                tjq('.hotel-list').html('');
                tjq(".hotel-list").append(response);
                tjq('#loading').css('display','none');
            }
        });
    });


    /*Added by mahipal 12-May-2016*/

    $('.hotelType').change(function(e){

        tjq('.hotelType').parent('li').removeClass('activefilter');

        e.preventDefault();

        var matches = [];
        tjq(".starRating:checked").each(function() {
            matches.push(this.value);
        });

        var matches_type = [];
        tjq(".hotelType:checked").each(function() {
            matches_type.push(this.value);
            tjq(this).parent('li').addClass('activefilter');
        });

        var minPrice = tjq(".min-price-label").text();
        var maxPrice =  tjq(".max-price-label").html();

        tjq.ajax({
            type:"POST",
            url: "<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,star_rating:matches,type_hotel:matches_type,layout:'travelo'},
            beforeSend: function(){
                tjq('#loading').css('display','block');
            },
            success: function(response){
                console.log(response);
                tjq('.hotel-list').html('');
                tjq(".hotel-list").append(response);
                tjq('#loading').css('display','none');
            }
        });
    });

</script>
