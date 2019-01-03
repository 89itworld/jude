<h2>Available Rooms</h2>
<div class="room-list listing-style3 hotel">

    <?php
    if($hotelAvailability['HotelRoomAvailabilityResponse']['@size']<=1){
        $data[0] = $hotelAvailability['HotelRoomAvailabilityResponse']['HotelRoomResponse'];
    }else{
        $data = $hotelAvailability['HotelRoomAvailabilityResponse']['HotelRoomResponse'];
    }
    foreach($data as $key => $avaliability){

      //  pr($avaliability); die;
        $price = $this->Number->precision($avaliability['RateInfos']['RateInfo']['ChargeableRateInfo']['@averageRate'],0);
        $price = $this->Number->format($price, array('thousands' => ','));
        ?>

        <article class="box">
            <figure class="col-sm-4 col-md-3">
                <a class="hover-effect popup-gallery" href="#" title=""><img width="230" height="160" src="http://placehold.it/230x160" alt=""></a>
            </figure>
            <div class="details col-xs-12 col-sm-8 col-md-9">
                <div>
                    <div>
                        <div class="box-title">
                            <h4 class="title"><?php echo $avaliability['roomTypeDescription']; ?></h4>
                            <dl class="description">
                                <dt>People:</dt>
                                <dd><?php echo $search_detail['adults'].' Adults' ?> <?php echo ($search_detail['kids'])? $search_detail['kids']." Kids":''?> </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="price-section">
                        <span class="price"><small>PER/NIGHT</small><?php echo "$". $price; ?></span>
                    </div>
                </div>
                <div>
                    <p>
                        <?php echo (@$avaliability['RateInfos']['RateInfo']['nonRefundable']=="")?"<span style='font-size: 11px; color: rgb(94, 147, 13);'><i class='fa fa-check'></i><strong> FREE cancellation</strong></span>":"<strong>Non-refundable</strong>";
                        echo "<br>";

                        if(@$avaliability['ValueAdds']['ValueAdd']){
                            if(@$avaliability['ValueAdds']['@size']==1){
                                echo "<i class='fa fa-check'></i> ".$avaliability['ValueAdds']['ValueAdd']['description'];
                            }else{
                                foreach($avaliability['ValueAdds']['ValueAdd'] as $valueAdd){
                                    echo "<i class='fa fa-check'></i> ".$valueAdd['description']. "<br>";
                                }
                            }
                        } ?>

                    </p>
                    <div class="action-section">
                        <span class="text-red"><?php echo @$avaliability['RateInfos']['RateInfo']['promoDescription'] . "<br>"; ?></span>
                        <span>
                            <?php  $roomAvaility = @$avaliability['RateInfos']['RateInfo']['currentAllotment'];
                            echo (!empty($roomAvaility) AND $roomAvaility <6)? $roomAvaility.' Left':''; ?>
                        </span>
                        <?php echo $this->Html->link("BOOK NOW",['controller'=>'Hotels','action'=>'booking',$avaliability['supplierType'],$key,$hotelAvailability['HotelRoomAvailabilityResponse']['hotelId']],['class'=>'button btn-small full-width text-center']); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php } ?>
</div>
