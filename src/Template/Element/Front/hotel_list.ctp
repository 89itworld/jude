<div class="filter-page__content" style="z-index: 50;">
    <div class="filter-item-wrapper">

        <?php

        if(($hotel_data->isEmpty())){
            echo '<p class="hotel_error_msg">No hotels were found which match your search criteria.</p>';
        }else {

            foreach ($hotel_data as $hotels_details) {

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
        <!-- PAGINATION -->
       <!-- <div class="page__pagination">
            <?php
/*            $this->Paginator->templates([
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
            */?>
        </div>-->
    </div>
</div>