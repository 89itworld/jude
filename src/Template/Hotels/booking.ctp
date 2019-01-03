<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">Hotel Booking</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li class="active">Hotel Booking</li>
        </ul>
    </div>
</div>

<?php
$roomPrice = @$hotelDetails['RateInfos']['RateInfo']['ChargeableRateInfo']['@averageRate'];
$roomPrice = $this->Number->format($roomPrice, array('thousands' => ','));
$nightStay = @$hotelDetails['RateInfos']['RateInfo']['ChargeableRateInfo']['@nightlyRateTotal'];
$nightStay = $this->Number->format($nightStay, array('thousands' => ','));
$tax = @$hotelDetails['RateInfos']['RateInfo']['ChargeableRateInfo']['@surchargeTotal'];
$tax = $this->Number->format($tax, array('thousands' => ','));
$totalPrice = @$hotelDetails['RateInfos']['RateInfo']['ChargeableRateInfo']['@total'];
$totalPrice = $this->Number->format($totalPrice, array('thousands' => ','));
?>

<section id="content" class="gray-area">
    <div class="container">
        <div class="row">
            <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                <div class="booking-section travelo-box">
                   <?php echo $this->Form->create('booking',['id'=>'booking']); ?>

<!--                    <form method="post" action="https://book.api.ean.com/ean-services/rs/hotel/v3/res">-->
                        <div class="person-information">
                            <h2>Your Personal Information</h2>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('fname',['class'=>'input-text full-width','type'=>'text','label'=>'First Name','required'=>'required']); ?>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('lname',['class'=>'input-text full-width','type'=>'text','label'=>'Last Name','required'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('email',['class'=>'input-text full-width','type'=>'text','label'=>'Email','required'=>'required']); ?>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('phone',['class'=>'input-text full-width','type'=>'text','label'=>'Phone number','required'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <label>Country code</label>
                                    <div class="selector">
                                        <?php echo $this->Form->input('country_code',['class'=>'full-width','label'=>false,'options'=>$country,'default'=>'USA']); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('city',['class'=>'input-text full-width','type'=>'text','label'=>'City','required'=>'required']); ?>
                                </div>
                            </div>

                            <?php if($hotelDetails['BedTypes']['@size'] > 1 ){ ?>
                                <div class="form-group">
                                    <?php foreach($hotelDetails['BedTypes']['BedType'] as $bedType){ ?>
                                        <input type="radio" name="bedType" value="<?php echo $bedType['@id']; ?>"> <?php echo $bedType['description']; ?>
                                   <?php }?>
                                </div>
                           <?php } else{
                                echo $this->Form->input('bedType',['value'=>$hotelDetails['BedTypes']['BedType']['@id'],'type'=>'hidden','label'=>false]);
                            }?>

                        </div>
                        <hr />
                        <div class="card-information">
                            <h2>Your Card Information</h2>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <label>Credit Card Type</label>
                                    <div class="selector">
                                        <?php echo $this->Form->input('card_type',['class'=>'full-width','label'=>false,'options'=>$cardType,'required'=>'required'])?>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('name',['class'=>'input-text full-width','label'=>'Card holder name','type'=>'text','required'=>'required']);?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('c_number',['class'=>'input-text full-width','label'=>'Card number','type'=>'text','required'=>'required']);?>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <?php echo $this->Form->input('card_id',['class'=>'input-text full-width','label'=>'Card identification number','type'=>'text','required'=>'required']);?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <label>Expiration Date</label>
                                    <div class="constant-column-2">
                                        <div class="selector">

                                            <?php echo $this->Form->input('month',['class'=>'full-width','options'=>
                                                [''=>'Month',
                                                '01'=>'Jan',
                                                '02'=>'Feb',
                                                '03'=>'Mar',
                                                '04'=>'Apr',
                                                '05'=>'may',
                                                '06'=>'Jun',
                                                '07'=>'Jul',
                                                '08'=>'Aug',
                                                '09'=>'Sep',
                                                '10'=>'Oct',
                                                '11'=>'Nov',
                                                '12'=>'Dec',
                                                ],
                                           // 'default'=>date("m"),
                                            'label'=>false]);?>
                                        </div>
                                        <div class="selector">
                                            <select name="year" class="full-width" required>
                                                <option value="">Year</option>
                                                <?php
                                                for($i=date("Y"); $i<=date("Y")+20; $i++) {
                                                    echo "<option value=".$i.">".$i."</option>";
                                                }
                                                ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-2">
                                    <?php echo $this->Form->input('zip',['class'=>'input-text full-width','label'=>'billing zip code','type'=>'text','required'=>'required']);?>
                                </div>
                            </div>
                        </div>
                    <?php echo $this->Form->input('rateKey',['type'=>'hidden','value'=>$hotelDetails['RateInfos']['RateInfo']['RoomGroup']['Room']['rateKey']]); ?>

                    <?php echo $this->Form->input('roomCode',['type'=>'hidden','value'=>$hotelDetails['roomTypeCode']]); ?>
                    <?php echo $this->Form->input('rateCode',['type'=>'hidden','value'=>$hotelDetails['rateCode']]); ?>
                    <?php echo $this->Form->input('chargeableRate',['type'=>'hidden','value'=>$totalPrice]); ?>

                    <?php echo $this->Form->input('apiKey',['type'=>'hidden','value'=>'7v3601hg72liit6tii2nreivc4']); ?>
                    <?php echo $this->Form->input('cid',['type'=>'hidden','value'=>'458081']); ?>
                <?php
                    $secret = 's3l8iuvgibk0';
                    $timestamp = gmdate('U'); // 1427233130 (Tue, 24 Mar 2015 21:38:50 +0000)
                    $sig= md5('7v3601hg72liit6tii2nreivc4' . $secret . $timestamp);

                    echo $this->Form->input('sig',['type'=>'hidden','value'=>$sig]); ?>

                    <?php echo $this->Form->input('customerIpAddress',['type'=>'hidden','value'=>$_SERVER['REMOTE_ADDR']]); ?>
                    <?php echo $this->Form->input('customerSessionId',['type'=>'hidden','value'=>$hotelData['customerSessionId']]); ?>
                    <?php echo $this->Form->input('hotelId',['type'=>'hidden','value'=>$hotelData['hotelId']]); ?>
                    <?php echo $this->Form->input('arrivalDate',['type'=>'hidden','value'=>date('m/d/Y', strtotime($search_detail['date_from']))]); ?>
                    <?php echo $this->Form->input('departureDate',['type'=>'hidden','value'=>date('m/d/Y', strtotime($search_detail['date_to']))]); ?>
                    <?php echo $this->Form->input('supplierType',['type'=>'hidden','value'=>$hotelDetails['supplierType']]); ?>
                    <?php echo $this->Form->input('room1',['type'=>'hidden','value'=>'2,5,7']); ?>

                    <?php echo $this->Form->input('minorRev',['type'=>'hidden','value'=>'99']); ?>
                    <?php echo $this->Form->input('locale',['type'=>'hidden','value'=>'en_US']); ?>
                    <?php echo $this->Form->input('currencyCode',['type'=>'hidden','value'=>'USD']); ?>

                    <?php echo $this->Form->input('smokingPreference',['type'=>'hidden','value'=>$hotelDetails['smokingPreferences']]); ?>
                        <hr />
                        <div class="form-group row">
                            <div class="col-sm-6 col-md-5">
                                <?php echo $this->Form->button('CONFIRM BOOKING',['type'=>'submit','class'=>'full-width btn-large'])?>
                            </div>
                        </div>
                   <?php echo $this->Form->end(); ?>
                </div>
            </div>

<?php // pr($hotelDetails); die; ?>

            <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                <div class="booking-details travelo-box">
                    <h4>Booking Details</h4>
                    <article class="image-box hotel listing-style1">
                        <figure class="clearfix">

                            <a href="javascript:void(0)" class=""><img class="middle-item" width="270" height="160" alt="" src="<?php echo $hotel['image_url']; ?>"></a>
                            <div class="travel-title">
                                <h5 class="box-title"><?php echo $hotel['name'];?><small><?php echo $hotel['city'].' '.$hotel['country']; ?></small></h5>
                                <?php echo $this->Html->link('EDIT',['controller'=>'Hotels','action'=>'hotel_details',$hotel['expedia_hotel_id']],['class'=>'button']);?>
                            </div>
                        </figure>
                        <div class="details">
                            <div class="feedback">
                                <div class='rating_bar' id="avg_rating">
                                    <div class='rating' style="width:<?php echo $hotel['review']*2*10 .'%'; ?>"></div>
                                </div>
                                <span class="review"><?php  echo $hotel['total_review']; ?> reviews</span>
                            </div>
                            <div class="constant-column-3 timing clearfix">
                                <div class="check-in">
                                    <label>Check in</label>
                                    <span><?php echo $search_detail['date_from']; ?></span>
                                </div>
                                <div class="duration text-center">
                                    <i class="soap-icon-clock"></i>
                                    <span><?php echo $hotelDetails['RateInfos']['RateInfo']['ChargeableRateInfo']['NightlyRatesPerRoom']['@size']; ?> Nights</span>
                                </div>
                                <div class="check-out">
                                    <label>Check out</label>
                                    <span><?php echo $search_detail['date_to']; ?></span>
                                </div>
                            </div>
                            <div class="guest">
                                <small class="uppercase">
                                    <?php echo str_replace('-',' - <span class="skin-color">',$hotelDetails['roomTypeDescription']); ?>
                                    </span></small>
                            </div>
                        </div>
                    </article>

                    <h4>Other Details</h4>
                    <dl class="other-details">
<!--                        <dt class="feature">room Type:</dt><dd class="value">Standard Family</dd>-->
                        <dt class="feature">per Room price:</dt><dd class="value">$<?php echo $roomPrice; ?></dd>
                        <dt class="feature">2 night Stay:</dt><dd class="value">$<?php echo $nightStay; ?></dd>
                        <dt class="feature">taxes and fees:</dt><dd class="value">$<?php echo $tax; ?></dd>
                        <dt class="total-price">Total Price</dt><dd class="total-price-value">$<?php echo $totalPrice; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    $('#booking').submit(function(e){

        var apiKey = "7v3601hg72liit6tii2nreivc4";
        var cid = "458081",
            minorRev = "99",
            currencyCode = "USD",
            locale = "en_US",
            sig = "<?php echo $sig; ?>";
//         xml = "%3CHotelRoomReservationRequest%3E%0A%20%3ChotelId%3E<?php //echo $hotel_id; ?>//%3C%2FhotelId%3E%0A%20%3CarrivalDate%3E <?php //echo $arrival; ?>//%3C%2FarrivalDate%3E%0A%20%3CdepartureDate%3E<?php //echo $depatature; ?>//%3C%2FdepartureDate%3E%0A%20%3CsupplierType%3E<?php //echo $supplier_type; ?>//%3C%2FsupplierType%3E%0A%20%3CrateKey%3E<?php //echo $ratekey; ?>//%3C%2FrateKey%3E%0A%20%3CroomTypeCode%3E<?php //echo $roomCode; ?>//%3C%2FroomTypeCode%3E%0A%20%3CrateCode%3E <?php //echo $rateCode; ?>//%3C%2FrateCode%3E%0A%20%3CchargeableRate%3E<?php //echo $chargableRate; ?>//%3C%2FchargeableRate%3E%0A%20%3CRoomGroup%3E%0A%20%3CRoom%3E%0A%20%3CnumberOfAdults%3E<?php //echo $adults; ?>//%3C%2FnumberOfAdults%3E%0A%20%3CfirstName%3E<?php //echo $fname; ?>//%3C%2FfirstName%3E%0A%20%3ClastName%3E<?php //echo $lname; ?>//%3C%2FlastName%3E%0A%20%3CbedTypeId%3E<?php //echo $bedType; ?>//%3C%2FbedTypeId%3E%0A%20%3CsmokingPreference%3E<?php //echo $smokingPreference; ?>//%3C%2FsmokingPreference%3E%0A%20%3C%2FRoom%3E%0A%20%3C%2FRoomGroup%3E%0A%20%3CReservationInfo%3E%0A%20%3Cemail%3E<?php //echo $email; ?>//%3C%2Femail%3E%0A%20%3CfirstName%3E<?php //echo $fname; ?>//%3C%2FfirstName%3E%0A%20%3ClastName%3E<?php //echo $lname; ?>//%3C%2FlastName%3E%0A%20%3ChomePhone%3E<?php //echo $phone; ?>//%3C%2FhomePhone%3E%0A%20%3CworkPhone%3E<?php //echo $phone; ?>//%3C%2FworkPhone%3E%0A%20%3CcreditCardType%3E<?php //echo $cardType; ?>//%3C%2FcreditCardType%3E%0A%20%3CcreditCardNumber%3E<?php //echo $cardNo; ?>//%3C%2FcreditCardNumber%3E%0A%20%3CcreditCardIdentifier%3E<?php //echo $card_id; ?>//%3C%2FcreditCardIdentifier%3E%0A%20%3CcreditCardExpirationMonth%3E<?php //echo $month; ?>//%3C%2FcreditCardExpirationMonth%3E%0A%20%3CcreditCardExpirationYear%3E<?php //echo $year; ?>//%3C%2FcreditCardExpirationYear%3E%0A%20%3C%2FReservationInfo%3E%0A%20%3CAddressInfo%3E%0A%20%3Caddress1%3E<?php //echo $address; ?>//%3C%2Faddress1%3E%0A%20%3Ccity%3E<?php //echo $city; ?>//%3C%2Fcity%3E%0A%20%3CstateProvinceCode%3E<?php //echo $state; ?>//%3C%2FstateProvinceCode%3E%0A%20%3CcountryCode%3E<?php //echo $countryCode; ?>//%3C%2FcountryCode%3E%0A%20%3CpostalCode%3E<?php //echo $zip; ?>//%3C%2FpostalCode%3E%0A%3C%2FAddressInfo%3E%0A%3C%2FHotelRoomReservationRequest%3E";

        e.preventDefault();
        tjq.ajax({
            type:"POST",
            dataType: 'json',
            url:"https://book.api.ean.com/ean-services/rs/hotel/v3/res",
            data:  tjq(this).serialize(),
//            data:  {'apiKey':apiKey,'cid':cid,'sig':sig,'locale':locale,'currencyCode':currencyCode,'minorRev':minorRev},
            success: function(response){
                console.log(response);

                  }
              });
        });

</script>
