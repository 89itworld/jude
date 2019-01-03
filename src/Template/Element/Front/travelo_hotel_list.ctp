 <?php
    if(($hotel_data->isEmpty())){
        echo '<p class="hotel_error_msg">No hotels were found which match your search criteria.</p>';
    }else {
        foreach ($hotel_data as $hotels_details) { ?>

            <article class="box">
                <figure class="col-sm-5 col-md-4">
                    <?php echo $this->Html->image($hotels_details['image_url']); ?>
                </figure>
                <div class="details col-sm-7 col-md-8">
                    <div>
                        <div>
                            <h4 class="box-title"><?php echo $this->Html->link($hotels_details['name'],['controller'=>'Hotels','action'=>'hotel_details',$hotels_details['expedia_hotel_id']],['target'=>'_blank']); ?>
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
                            <span class="review"><?php echo $hotels_details['total_review']; ?> reviews</span>
                        </div>
                    </div>
                    <div>
                        <p><?php echo $hotels_details['description'].'...';?></p>
                        <div>
                            <span class="price"><small>AVG/NIGHT</small>$<?php echo $hotels_details['hotel_price']['base_price']; ?></span>

                           <?php echo $this->Html->link('SELECT',['controller'=>'Hotels','action'=>'hotel_details',$hotels_details['expedia_hotel_id']],['class'=>'button btn-small full-width text-center','target'=>'_blank']);?>
                        </div>
                    </div>
                </div>
            </article>
   <?php } } ?>
