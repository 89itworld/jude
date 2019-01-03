<!-- main-cont -->
<script type="text/javascript" src="https://sandbox.zooz.com/mobile/checkoutapi/js/checkout-ext-api.js"></script>
 <script type="text/javascript">

         var initParams = {
             "isSandbox": true,
            // uniqueID: "PAPI_ZooZNP_LTG3Q5LTIQFFJR6C3D4EAMN4L4_1"
			 programId:: "PAPI_ZooZNP_LTG3Q5LTIQFFJR6C3D4EAMN4L4_1"
         };
         var zoozApi = new Zooz.Ext.External(initParams);
         var succFunc = function (data) {
             console.log("success",data);
         }
         var failFunc = function (data) {
             console.log("fail",data);
         }
         var paymentRequest =
         {
             "paymentToken": <?php echo $flights_details["zooz"]->responseObject->paymentToken; ?>,
             "email": <?php echo $flights_details["email"]; ?>,
             "paymentMethod": {
                 "paymentMethodType": "CreditCard",
                 "paymentMethodDetails": {
                     "cardNumber": "4580458045804580",
                     "month": "01",
                     "year": "20",
                     "cvvNumber": "123"
                 }
             }
         };
         var status = zoozApi.addPaymentMethod(paymentRequest, succFunc, failFunc);
         console.log(status);
 </script>
<?php // pr($flights_details); die; ?>
<div class="main-cont">
  <div class="body-wrapper">
    <div class="wrapper-padding">
    <div class="page-head">
      <div class="page-title">Flights - <span>booking complete</span></div>
      <div class="breadcrumbs">
        <a href="#">Home</a> / <a href="#">flight</a> / <span>flight Details</span>
      </div>
      <div class="clear"></div>
    </div>

	<div class="sp-page">
		<div class="sp-page-a">
			<div class="sp-page-l">
				<?php if(isset($flights_details['result']->booking_id))  {?>
  				<div class="sp-page-lb">
  					<div class="sp-page-p">
						<div class="booking-left">
							<h2>Booking Complete</h2>

							<div class="comlete-alert">
								<div class="comlete-alert-a">
									<b>Thank You. Your Flight Booking is Confirmed.</b>
									<span></span>
								</div>
							</div>

							<div class="complete-info">
								<h2>Your Personal Information</h2>
								<div class="complete-info-table">
									<div class="complete-info-i">
										<div class="complete-info-l">Name:</div>
										<div
											class="complete-info-r"><?= $flights_details['result']->passengers[0]->name; ?></div>
										<div class="clear"></div>
									</div>

									<div class="complete-info-i">
										<div class="complete-info-l">Last Name:</div>
										<div
											class="complete-info-r"><?= $flights_details['result']->passengers[0]->surname; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">E-Mail Adress:</div>
										<div class="complete-info-r"><?= $flights_details['email'] ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">Country:</div>
										<div
											class="complete-info-r"><?= $flights_details['result']->passengers[0]->nationality; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">Phone Number:</div>
										<div class="complete-info-r"><?= $flights_details['phone'] ?></div>
										<div class="clear"></div>
									</div>
								</div>

								<div class="complete-devider"></div>

								<div class="complete-txt">
									<h2>Payment Info</h2>
									<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. Que porro quisqua. Sed ut perspiciatis unde omnis ste natus error sit voluptatem.</p>
									<div class="complete-txt-link"><a href="#">Payment is made.</a></div>
									<div class="complete-info-table">
										<div class="complete-info-i">
											<div class="complete-info-l">Total Price:</div>
											<div class="complete-info-r">$<?= $flights_details['result']->total; ?></div>
											<div class="clear"></div>
										</div>


										<div class="complete-info-i">
											<div class="complete-info-l">Transaction No:</div>
											<div class="complete-info-r"><?= $flights_details['result']->transaction_id; ?></div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

								<div class="complete-devider"></div>

								<div class="complete-txt final">
									<h2>Booking Details</h2>
									<p>Qoluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. Que porro quisqua. Sed ut perspiciatis unde omnis ste natus error.</p>
									<div class="complete-txt-link"><a href="#">Your Flight Info</a></div>
								</div>

							</div>
							<div class="complete-info-table">
																									<div class="complete-info-i">
																										<div class="complete-info-l">Booking Id:</div>
																										<div class="complete-info-r"><?= $flights_details['result']->booking_id; ?></div>
																										<div class="clear"></div>
																									</div>
																									<?php
																									foreach ($flights_details['result']->flights as $item) { ?>
																										<div class="complete-info-i">
																											<div class="complete-info-l">Flight No:</div>
																											<div class="complete-info-r"><?= $item->flight_no; ?></div>
																											<div class="clear"></div>
																										</div>
																										<div class="complete-info-i">
																											<div class="complete-info-l">Source:</div>
																											<div class="complete-info-r"><?= $item->src_name; ?></div>
																											<div class="clear"></div>
																										</div>
																										<div class="complete-info-i">
																											<div class="complete-info-l">Destination:</div>
																											<div class="complete-info-r"><?= $item->dst_name; ?></div>
																											<div class="clear"></div>
																										</div>
																										<div class="complete-info-i">
																											<div class="complete-info-l">Airline:</div>
																											<div class="complete-info-r"><?= $item->operating_airline->name; ?></div>
																											<div class="clear"></div>
																										</div>
																										<div class="complete-info-i">
																											<div class="complete-info-l">Departure Time:</div>
																											<div class="complete-info-r"><?= date('d M y h:i A', $item->dtime); ?></div>
																											<div class="clear"></div>
																										</div>

																										<div class="complete-info-i">
																											<div class="complete-info-l">Arrival Time:</div>
																											<div class="complete-info-r"><?= date('d M y h:i A', $item->atime); ?></div>
																											<div class="clear"></div>
																										</div>
																										<?php } ?>
																								</div>


						</div>
  					</div>
  				</div>
				<?php }
					else {
						echo "Flight not available.";
					} ?>
  				<div class="clear"></div>
			</div>
		</div>

		<div class="sp-page-r">
			<div class="h-help">
				<div class="h-help-lbl">Need Judefly Help?</div>
				<div class="h-help-lbl-a">We would be happy to help you!</div>
				<div class="h-help-phone">2-800-256-124 23</div>
				<div class="h-help-email">admin@judefly.com</div>
			</div>
			<div class="h-reasons">
				<div class="h-liked-lbl">Reasons to Book with us</div>
				<div class="h-reasons-row">
				<!-- // -->
					<div class="reasons-i">
					<div class="reasons-h">
						<div class="reasons-l">
							<img alt="" src="img/reasons-a.png">
						</div>
						<div class="reasons-r">
  						<div class="reasons-rb">
							<div class="reasons-p">
								<div class="reasons-i-lbl">Awesome design</div>
								<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
							</div>
  						</div>
  						<br class="clear">
						</div>
					</div>
					<div class="clear"></div>
					</div>
				<!-- \\ -->
				<!-- // -->
					<div class="reasons-i">
					<div class="reasons-h">
						<div class="reasons-l">
							<img alt="" src="img/reasons-b.png">
						</div>
						<div class="reasons-r">
  						<div class="reasons-rb">
							<div class="reasons-p">
								<div class="reasons-i-lbl">carefylly handcrafted</div>
								<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
							</div>
  						</div>
  						<br class="clear">
						</div>
					</div>
					<div class="clear"></div>
					</div>
				<!-- \\ -->
				<!-- // -->
					<div class="reasons-i">
					<div class="reasons-h">
						<div class="reasons-l">
							<img alt="" src="img/reasons-c.png">
						</div>
						<div class="reasons-r">
  						<div class="reasons-rb">
							<div class="reasons-p">
								<div class="reasons-i-lbl">sustomer support</div>
								<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
							</div>
  						</div>
  						<br class="clear">
						</div>
					</div>
					<div class="clear"></div>
					</div>
				<!-- \\ -->
				</div>
			</div>

		</div>
		<div class="clear"></div>
	</div>

    </div>
  </div>
</div>
<!-- /main-cont -->