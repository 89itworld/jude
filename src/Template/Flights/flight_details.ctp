<?php //pr($flight_details); ?>
<div class="main-cont">
    <div class="body-wrapper">
        <div class="wrapper-padding">
            <div class="page-head">
                <div class="page-title">Air Ticket - <span>booking</span></div>
                <div class="breadcrumbs">
                    <a href="#">Home</a> / <a href="#">Flight</a> / <span>flight booking</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="sp-page">
                <div class="sp-page-a">
                    <div class="sp-page-l">
                        <div class="sp-page-lb">
                            <!--<form method="post" action="" id="flights_save_booking">-->
                            <?= $this->Form->create(null, ['url' => ['controller' => 'Flights', 'action' => 'save-booking']]); ?>
                            <div class="sp-page-p">
                                <div class="booking-left">
                                    <h2>Passenger Information</h2>
                                    <div class="booking-form">
                                        <div class="booking-form-i">
                                            <label>First Name:</label>
                                             <?php echo $this->Form->input('passengers.0.name', ['type' => 'text', 'required' => 'required','id' => '', 'label' => false]); ?>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Last Name:</label>
                                             <?php echo $this->Form->input('passengers.0.surname', ['type' => 'text', 'id' => '','required' => 'required', 'label' => false]); ?>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Male/Female</label>
                                            <?php echo $this->Form->input('passengers.0.title', array(
                                                'options' => array(
                                                    'Mr' => 'Male',
                                                    'Ms' => 'Female',
                                                    'Mx' => 'Intersex',
                                                ),
                                                'class' => 'awe-select','required' => 'required',
                                                'label' => false,
                                            )); ?>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Date of birth:</label>
                                            <?php
                                            echo $this->Form->input('passengers.0.dob', ['type' => 'text', 'id' => 'dob_on','required' => 'required', 'required' => 'required', 'class' => 'awe-calendar', 'placeholder' => 'dob', 'label' => false, 'data-validation' => 'required', 'data-validation-error-msg' => 'This field is required.', 'data-validation-error-msg-container' => '#dob_on']);
                                            ?>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Country:</label>
                                           <?= $this->Form->input('passengers.0.country', ['type' => 'text','required' => 'required', 'label' => false]); ?>
                                        </div>

                                        <div class="booking-form-i">
                                            <label>Citizenship:</label>
                                           <?= $this->Form->input('passengers.0.nationality', ['type' => 'text', 'label' => false]); ?>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Passport or ID number:</label>
                                            <?= $this->Form->input('passengers.0.cardno', ['type' => 'text', 'label' => false]); ?>

                                        </div>
                                        <div class="booking-form-i">
                                            <label>Passport or ID expiry date:</label>
                                            <?php
                                            echo $this->Form->input('passengers.0.passport_on', ['type' => 'text', 'id' => 'passport_on', 'required' => 'required', 'class' => 'awe-calendar', 'placeholder' => 'Passport date', 'label' => false, 'data-validation' => 'required', 'data-validation-error-msg' => 'This field is required.', 'data-validation-error-msg-container' => '#passport_on']);
                                            ?>
                                        </div>


                                        <div class="booking-form-i" style="border: none;">
                                            <label>    Save Personal Info    </label>
                                                <?= $this->Form->input("save_info", ['type' => "checkbox", "label" => false]); ?>


                                        </div>
                                        <div class="booking-form-i">
                                                                                    <label></label>
                                                                                    <a href="#" class="add-passanger">Add passengers</a>
                                                                                </div>
                                        <div class="booking-devider"></div>
                                    </div>

                                    <h2>Customer Information</h2>

                                    <div class="booking-form">
                                        <!--<div class="booking-form-i">
                                            <label>First Name:</label>
                                            <div class="input"><input type="text" value=""></div>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Last Name:</label>
                                            <div class="input"><input type="text" value=""></div>
                                        </div>-->
                                        <div class="booking-form-i">
                                            <label>Email Adress:</label>
                                            <div
                                                class="input"><?= $this->Form->input('email', ['type' => 'text', 'label' => false]); ?></div>
                                        </div>
                                        <!--<div class="booking-form-i">
                                            <label>Confirm Email Adress:</label>
                                            <div class="input"><input type="text" value=""></div>
                                        </div>
                                        <div class="booking-form-i">
                                            <label>Country:</label>
                                            <div class="input"><input type="text" value=""></div>
                                        </div>-->
                                        <div class="booking-form-i">
                                            <label>Preferred Phone Number:</label>
                                            <div
                                                class="input"><?= $this->Form->input('phone', ['type' => 'text', 'label' => false]); ?></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="booking-devider no-margin"></div>
                                    <h2>How would you like to pay?</h2>

                                    <div class="payment-wrapper">
                                        <div class="payment-tabs">
                                            <a href="#" class="active">Credit Card <span></span></a>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="payment-tabs-content">
                                            <!-- // -->
                                            <div class="payment-tab">
                                                <div class="payment-type">
                                                    <label>Card Type:</label>
                                                    <div class="card-type"> <?php echo $this->Html->image('paymentt-01.png'); ?></div>
                                                    <div class="card-type"> <?php echo $this->Html->image('paymentt-02.png'); ?></div>
                                                    <div class="card-type"> <?php echo $this->Html->image('paymentt-03.png'); ?></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="booking-form">
                                                    <div class="booking-form-i">
                                                        <label>Card Number:</label>
                                                        <div
                                                            class="input"><?= $this->Form->input('card_number', ['type' => 'text','required' => 'required', 'label' => false]); ?></div>
                                                    </div>
                                                    <div class="booking-form-i">
                                                        <label>Card Holder Name:</label>
                                                        <div
                                                            class="input"><?= $this->Form->input('card_name', ['type' => 'text','required' => 'required', 'label' => false]); ?></div>
                                                    </div>
                                                    <div class="booking-form-i">
                                                        <label>Expiration Date:</label>
                                                        <div class="card-expiration">
                                                            <?php
                                                            $m_arr = array();
                                                            $m_arr[""] = "Month";
                                                            for ($i = 1; $i <= 12; $i++) {
                                                                $m_arr[$i] = $i;
                                                            }
                                                            echo $this->Form->input('ex_month', ['options' => $m_arr,'required' => 'required', 'class' => "custom-select", 'label' => false]); ?>
                                                        </div>
                                                        <div class="card-expiration">
                                                            <?php
                                                            $y_arr = array();
                                                            $y_arr[""] = "Year";
                                                            for ($i = 2019; $i <= 2027; $i++) {
                                                                $y_arr[$i] = $i;
                                                            }
                                                            echo $this->Form->input('ex_year', ['options' => $y_arr,'required' => 'required', 'class' => "custom-select card-year", 'label' => false]); ?>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="booking-form-i">
                                                        <label>Card Indefication Number:</label>
                                                        <div class="inpt-comment">
                                                            <div class="inpt-comment-l">
                                                                <div class="inpt-comment-lb">
                                                                    <div
                                                                        class="input"><?= $this->Form->input('ccv', ['type' => 'text', 'required' => 'required','label' => false]); ?></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="inpt-comment-r">
                                                            <div class="padding">
                                                                <a href="#">What’s This?</a>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="">
                                                    <label>
                                                        <?= $this->Form->input('term', ['type' => 'checkbox','required' => 'required', 'label' => false]); ?>
                                                        Im accept the rules <a href="#">Terms & Conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- \\ -->

                                        </div>
                                    </div>
                                    <div class="booking-complete">
                                        <h2>Review and book your trip</h2>
                                        <p></p>
                                        <?= $this->Form->input('booking_token', ['type' => 'hidden', 'value' => $flight_details['booking_token'], 'label' => false]); ?>
                                        <?= $this->Form->input('amount', ['type' => 'hidden', 'value' => $flight_details["conversion"]["amount"] /*+ $flight_details['baggage']["combinations"][0]["price"]['amount']*/, 'label' => false]); ?>
                                        <!--<input type="submit" value="saveBooking">-->
                                        <button class="booking-complete-btn" id="save_booking_"
                                                onclick="return save_booking();">COMPLETE BOOKING
                                        </button>
                                    </div>

                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="sp-page-r">

                    <div class="checkout-coll">
                        <div class="checkout-head">
                            <div class="checkout-headl">
                                <a href="#"><img alt="" src="img/check-img-01.jpg"></a>
                            </div>
                            <div class="checkout-headr">
                                <div class="checkout-headrb">
                                    <div class="checkout-headrp">
                                        <div class="chk-left">
                                            <div class="chk-lbl"><a
                                                    href="#"><?= $flight_details['db_data']['departure_location'] . " -" . $flight_details['db_data']['arrival_location']; ?></a>
                                            </div>
                                            <div class="chk-lbl-a">ONEWAY FLIGHT</div>
                                            <div class="chk-logo">
                                                <?php echo $this->Html->image('https://images.kiwi.com/airlines/64/' . @$flight_details['flights']['0']['airline']['iata'] . ".png", ['alt' => @$flight_details['flights']['0']['airline']['iata']]); ?>

                                                <!--<img  alt="" src="<? /*='https://images.kiwi.com/airlines/64/'.@$flight_details['flights']['0']['airline']['iata'].".png"; */ ?>">-->
                                            </div>

                                        </div>
                                        <div class="chk-right">
                                            <a href="#"><img alt="" src="img/chk-edit.png"></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="chk-lines">
                            <div class="chk-line chk-fligth-info">
                                <div class="chk-departure">
                                    <span>Departure</span>
                                </div>
                                <div class="chk-fligth-devider"></div>
                                <div class="chk-fligth-time"><img alt="" src="img/icon-nights.png"></div>
                                <div class="chk-fligth-devider"></div>
                                <div class="chk-arrival">
                                    <span>Arrival</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <?php
                        foreach ($flight_details['flights'] as $item) {
                            ?>
                            <div class="chk-lines">
                                <div class="chk-line chk-fligth-info">
                                    <div class="chk-departure">
                                        <span><?= $item["src"]; ?></span>
                                        <?php
                                        echo "<b>" . date('h:i A', $item['dtime']) . "<br>" . date('M d,', $item['dtime']) . "</b>"; ?>
                                    </div>
                                    <div class="chk-fligth-devider"></div>
                                    <div class="chk-fligth-time"><img alt="" src="img/icon-nights.png"></div>
                                    <div class="chk-fligth-devider"></div>
                                    <div class="chk-arrival">
                                        <span><?= $item["dst"]; ?></span>
                                        <?php
                                        echo "<b>" . date('h:i A', $item['atime']) . "<br>" . date('M d,', $item['atime']) . "</b>"; ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        <?php } ?>
                        <div class="chk-details">
                            <h2>Details</h2>
                            <div class="chk-detais-row">
                                <div class="chk-line">
                                    <span class="chk-l">AIRLINE:</span>
 							<span class="chk-r"><?= $flight_details["flights"][0]["airline"]["Name"];; ?></span>
                                    <div class="clear"></div>
                                </div>
                                <!--<div class="chk-line">
                                    <span class="chk-l">FLIGHT TYPE:</span>
                                    <span class="chk-r">Business</span>
                                    <div class="clear"></div>
                                </div>-->
                                <div class="chk-line">
                                    <span class="chk-l">Price</span>
                                    <span class="chk-r">$<?= $flight_details["conversion"]["amount"] ?></span>
                                    <div class="clear"></div>
                                </div>
                                <div class="chk-line">
                                    <span class="chk-l">1× Cabin baggage</span>
                                    <span
                                        class="chk-r"><?php if ($flight_details['baggage']["combinations"]["hold_bag"][0]["price"]['amount'] > 0) {
                                            echo "$" . $flight_details['baggage']["combinations"]["hold_bag"][0]["price"]['amount'];
                                        } else {
                                            echo "FREE";
                                        } ?></span>
                                    <div class="clear"></div>
                                </div>
                                <!-- <div class="chk-line">
                                     <span class="chk-l">1× Checked baggage</span>
                                     <span class="chk-r">3.52$</span>
                                     <div class="clear"></div>
                                 </div>-->
                            </div>
                            <div class="chk-total">
                                <div class="chk-total-l">Total Price(USD)</div>
                                <div class="chk-total-r">
                                    $<?= ($flight_details["conversion"]["amount"] + $flight_details['baggage']["combinations"]["hold_bag"][0]["price"]['amount']); ?></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    <div class="h-help">
                        <div class="h-help-lbl">Need Judefly Help?</div>
                        <div class="h-help-lbl-a">We would be happy to help you!</div>
                        <div class="h-help-phone">2-800-256-124 23</div>
                        <div class="h-help-email">judefly@mail.com</div>
                    </div>

                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>
    <script>
       $( function() {
          $( "#dob_on" ).datepicker({
              changeMonth: true,
              changeYear: true,
              maxDate: '-3M',
          });
          $( "#passport_on" ).datepicker({
              changeMonth: true,
              changeYear: true,
              minDate: '-1D',
          });
        });


        function save_booking() {
            $.ajax({
                type: "POST",
                url: "<?php echo $this->Url->build(['controller' => 'Flights', 'action' => 'save-booking']);?>",
                data: $("#flights_save_booking input").serialize(),
                success: function (response) {
                    console.log(response);

                }
            });
        }


    </script>
