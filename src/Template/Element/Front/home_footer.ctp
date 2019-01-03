<div style="display: none;" id="loginSignup" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="gridModalLabel">
    <div class="col-md-8 col-md-offset-2">
        <div class="modal-dialog width-100" role="document">
            <div class="modal-content">
                <div class="modal-header no-padding" style="border-bottom: 0px none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body no-padding">
                        <div class="row">
                            <div class="col-md-6 login-register-bg top-padding-80" style="height:500px;">
                                <div class="joing-offer">
                                    <span class="text-white block">Become a Judefly member Now!</span>
                                    <p>Membership is FREE and get early access to travel, entertainment and local deals.
                                        Get Points! Win tickets! and join the Judefly Community!</p>
                                </div>
                            </div>
                            <div class="col-md-6 bottom-padding-20">
                                <div class="top-margin-40 left-padding-20 right-padding-20">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#signup" aria-controls="signup"
                                                                                  role="tab" data-toggle="tab">Sign
                                                Up</a></li>
                                        <li role="presentation"><a href="#login" aria-controls="login" role="tab"
                                                                   data-toggle="tab">Log In</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="signup">
                                            <div class="top-margin-10">
                                                <a href="#" class="btn btn-block facebook-bg facebook text-white social-btns"><i
                                                        class="fa fa-facebook bg-transparent right-margin-20"></i>
                                                    SIGNUP USING FACEBOOK</a>
                                                <a href="#" class="btn btn-block google-plus-bg google_btn text-white social-btns"><i
                                                        class="fa fa-google-plus bg-transparent right-margin-20"></i>
                                                    SIGNUP USING GOOGLE+</a>
                                            </div>
                                            <div class="or font-20 top-margin-20 bottom-margin-10">
                                                OR
                                            </div>
                                            <?php echo $this->Form->create('signup', ['id' => 'registrationForm', 'class' => 'text-black']); ?>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control', 'id' => 'signup_email', 'placeholder' => 'Email address', 'required' => 'required', 'label' => false)); ?>
                                                <span id="signup_email_error" class="error" style="color: red"></span>
                                            </div>
                                            <div class="form-group bottom-margin-0">
                                                <?php echo $this->Form->input('password', array('type' => 'password', 'class' => 'form-control', 'id' => 'signup_password', 'placeholder' => 'Create Password', 'required' => 'required', 'label' => false)); ?>
                                                <span id="signup_pass_error" class="error" style="color: red"></span>
                                            </div>
                                            <p class="font-13 top-padding-5 left-padding-5"> 6-30 characters, with one
                                                number and one letter. </p>
                                            <div class="checkbox">
                                                <label class="font-13">
                                                    <input type="checkbox" name="subscribe"> Subscribe to our
                                                    newsletter.
                                                </label>
                                                <div class="clearfix"></div>
                                                <label class="font-13">
                                                    <input type="checkbox" name="remember"> Remember Me.
                                                </label>
                                            </div>
                                            <?php echo $this->Form->button('SIGNUP', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']); ?>
                                            <?php echo $this->Form->end(); ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="login">
                                            <div class="top-margin-10">
                                                <a href="#" class="btn btn-block facebook-bg facebook text-white social-btns"><i
                                                        class="fa fa-facebook bg-transparent right-margin-20"></i> LOGIN
                                                    USING FACEBOOK</a>
                                                <a href="#" class="btn btn-block google-plus-bg google_btn text-white social-btns"><i
                                                        class="fa fa-google-plus bg-transparent  right-margin-20"></i>
                                                    LOGIN USING GOOGLE+</a>
                                            </div>
                                            <div class="or font-20 top-margin-20 bottom-margin-10">
                                                OR
                                            </div>
                                            <span id="login_error" style="color: red"></span>

                                            <?php echo $this->Form->create('login', ['id' => 'loginForm', 'class' => 'text-black']); ?>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control', 'id' => 'signup_email', 'placeholder' => 'Email address', 'required' => 'required', 'label' => false)); ?>
                                            </div>
                                            <div class="form-group bottom-margin-0">
                                                <?php echo $this->Form->input('password', array('type' => 'password', 'class' => 'form-control', 'id' => 'signup_password', 'placeholder' => 'Password', 'required' => 'required', 'label' => false)); ?>
                                            </div>
                                            <?php echo $this->Html->link('Forgot Password', '#', ['class' => 'font-13 top-margin-10 block text-black']); ?>
                                            <div class="checkbox">
                                                <div class="clearfix"></div>
                                                <label class="font-13">
                                                    <input type="checkbox" name="remember"> Remember Me.
                                                </label>
                                            </div>
                                            <?php echo $this->Form->button('LOGIN', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']); ?>
                                            <?php echo $this->Form->end(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END / NAVIGATION -->
</div>

<footer class="footer"><!-- Start:  Footer Area -->
    <div class="container">
        <div class="row" data-wow-duration="1.5s">
            <!-- Start: Your logo area -->
            <div class="logo col-xs-4 col-sm-4 col-md-4">
                <?php echo $this->Html->image('logo/judefly_trans_bg_logo.png', ['alt' => '', 'class' => 'img-responsive', 'widht' => '110']) ?>
            </div>
            <!-- End: Your logo area -->

            <div class="part col-xs-4 col-sm-4 col-md-4">
                <ul class="foot-links">
                    <li><?= $this->Html->link('About',['controller'=>'Homes','action'=>'page/about-us','prefix'=>false],[]);?>
                       </li>
                    <li><a href="">Merchant & Partners</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>

            <div class="part col-xs-4 col-sm-4 col-md-4">
                <div class="social_icon">
                    <ul class="navbar-right">
                        <!-- Social Icon Goes Here  -->
                        <li><a href="https://www.facebook.com/JudeflyTravel/?skip_nax_wizard=true" target="_blank"> <i
                                    class="fa facebook fa-facebook bg-transparent"></i> </a></li>
                        <li><a href="https://twitter.com/JudeFlyTRVL" target="_blank"> <i
                                    class="fa twitter fa-twitter bg-transparent"></i> </a></li>
                        <li><a href="https://www.instagram.com/judefly/" target="_blank"> <i
                                    class="fa instagram fa-instagram bg-transparent"></i> </a></li>
                        <!-- <li><a href="#"> <i class="fa skype fa-skype"></i> </a></li>
                        <li><a href="#"> <i class="fa rss fa-rss "></i> </a></li> -->
                    </ul>
                </div><!-- End:  "social_icon" -->
            </div><!-- End:  "part" -->
        </div><!-- End:  "row" -->
    </div><!-- End:  "container" -->
</footer><!-- End:  Footer Area -->

<?php // echo $this->Html->script(['jquery-1.11.2.min', 'jquery-ui', 'bootstrap.min', 'jquery.stellar.min', 'jquery.scrollTo.min', 'jquery.localScroll.min', 'home/scripts', 'owl.carousel.min', 'wow.min', 'jquery.nicescroll.min', 'matchMedia', 'navbar.matchMedia', 'jquery.ajaxchimp.min', 'jquery.countdown', 'jquery.backgroundvideo']); ?>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<?php echo $this->Html->script(['jquery.mousewheel-3.0.6.pack', 'jquery.fancybox.js?v=2.1.5', 'jquery.fancybox-buttons.js?v=1.0.5', 'jquery.fancybox-thumbs.js?v=1.0.7', 'jquery.fancybox-media.js?v=1.0.6', 'custom-scripts', 'video-bg', 'masonry.pkgd.min', 'jquery.parallax-1.1.3', 'theia-sticky-sidebar', 'jquery.magnific-popup.min', 'jquery.themepunch.revolution.min', 'jquery.themepunch.tools.min']); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
<script> $.validate(); </script>

<script type="text/javascript">
    if ($('#slider-revolution').length) {
        $('#slider-revolution').show().revolution({
            ottedOverlay: "none",
            delay: 10000,
            startwidth: 1600,
            startheight: 650,
            hideThumbs: 200,

            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,

            simplifyAll: "off",

            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "preview4",

            touchenabled: "on",
            onHoverStop: "on",
            nextSlideOnWindowFocus: "off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,

            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

            keyboardNavigation: "off",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",

            spinner: "spinner2",

            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "off",
            forceFullWidth: "off",


            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });
    }

    //     flight autocomplete for Source Airport..
    $(document).ready(function () {

        $('.source').autocomplete({
            source: '<?php echo $this->Url->build(['controller' => 'Homes', 'action' => 'autocomplete']); ?>',
            create: function () {
                $(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                    //                return $('<li>').append(item.key + '<span> - '+ item.label + '</span>').appendTo(ul);
                    return $("<li></li>")
                        .data("item.autocomplete-item", item)
                        .append("<a>" + item.label + "</a>")
                        .appendTo(ul);
                };
            },
            focus: function (e, ui) {
                $('#departureAirport').val(ui.item.key);
            }
        });

        $('.destination').autocomplete({
            source: '<?php echo $this->Url->build(['controller' => 'Homes', 'action' => 'autocomplete']); ?>',
            create: function () {
                $(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                    //                return $('<li>').append(item.key + '<span> - '+ item.label + '</span>').appendTo(ul);
                    return $("<li></li>")
                        .data("item.autocomplete-item", item)
                        .append("<a>" + item.label + "</a>")
                        .appendTo(ul);
                };
            },
            focus: function (e, ui) {
                $('#arrivalAirport').val(ui.item.key);
            }
        });

        $('#flights_search').submit(function () {
            var departureAirport = $('.source').val().split("(", 1);
            var arrivalAirport = $('#destnateAirport').val().split("(", 1);
            $('#flight_leaving_from').append(departureAirport);
            $('#flight_going_to').append(arrivalAirport);
            $('.redirect-wrap').show();
        });
    })

    $('.date-from').change(function () {
        var minDate = $('.date-from').datepicker('getDate');
        minDate.setDate(minDate.getDate() + 1);
        $(".date-to").datepicker("option", {minDate: minDate});
    });

    $(".date-to").change(function () {
        var maxDate = $('.date-to').datepicker('getDate');
        maxDate.setDate(maxDate.getDate());
        $(".date-from").datepicker("option", {maxDate: maxDate});
    });

    $('#depart_on').change(function () {
        var minDate = $('#depart_on').datepicker('getDate');
        minDate.setDate(minDate.getDate());
        $("#returnDate").datepicker("option", {minDate: minDate});
    });

    $("#returnDate").change(function () {
        var maxDate = $('#returnDate').datepicker('getDate');
        maxDate.setDate(maxDate.getDate());
        $("#depart_on").datepicker("option", {maxDate: maxDate});
    });

</script>

<script type="text/javascript">
    var tid = setInterval(tagline_vertical_slide, 2500);

    // vertical slide
    function tagline_vertical_slide() {
        var curr = $("#tagline ul li.active");
        curr.removeClass("active").addClass("vs-out");
        setTimeout(function () {
            curr.removeClass("vs-out");
        }, 500);

        var nextTag = curr.next('li');
        if (!nextTag.length) {
            nextTag = $("#tagline ul li").first();
        }
        nextTag.addClass("active");
    }

    function abortTimer() { // to be called when you want to stop the timer
        clearInterval(tid);
    }
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.2.1/jssocials.min.js"></script>
<script>
    $("#shareRoundIcons").jsSocials({
        showLabel: false,
        showCount: false,
        shares: ["email", "twitter", "facebook", "googleplus", "linkedin"]
    });
</script>

<script>
	$('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $('#registrationForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'register']);?>",
            data:  $(this).serialize(),
            success: function(response){
                   console.log(response);
                var msg= JSON.parse(response);
//                console.log(msg);
                if(msg=='success'){
                    location.reload();
                }else{
                    var emailUnique= msg['email']['emailUnique'];
                    var emailValid= msg['email']['valid'];
                    var passwrod= msg['password']['length'];
//
                    $('.error').text('');
                    $('#signup_email_error').append(emailUnique);
                    $('#signup_email_error').append(emailValid);
                    $('#signup_pass_error').append(passwrod);
                }
            }
        });
    });

    $('#signup_email').keyup(function(){
        $('#signup_email_error').text('');
    });
    $('#signup_password').keyup(function(){
        $('#signup_pass_error').text('');
    });
//    $('#signup_conf_pass').keyup(function(){
//        $('#signup_conf_pass_error').text('');
//    });


    $('#loginForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'login']);?>",
            data:  $(this).serialize(),
            success: function(response){
                if(response =='success'){
                    location.reload();
                }else{
                    console.log(response);
                    $('#login_error').text('');
                    $('#login_error').append(response);
                }
            }
        });
    });
    $('#login_email').keyup(function(){
        $('#login_error').text('');
    });

    $('#login_password').keyup(function(){
        $('#login_error').text('');
    });
    
    $('#subscribe_form').submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'subscribe']);?>",
            data:  $(this).serialize(),
            success: function(response){
                if(response =='success'){
                    $('.subscription_success').text('Subscribe successfully.');
                    $('#subscription').modal('hide');
                }else{
                	 var msg= JSON.parse(response);
                	 var emailUnique= msg['email']['emailUnique'];
                     var emailValid= msg['email']['valid'];
                     if(emailUnique){
                     	$('.subscription_failed').text('').append(emailUnique); 	
                     }else if(emailValid){
                     	$('.subscription_failed').text('').append(emailValid);
                     }
                    
                }
            }
        });
    });
    
    $('#subs_email').keyup(function(){
    	$('.subscription_failed').text(''); 
    });
    
</script>

<script>
(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
		window.fbAsyncInit = function() {
		FB.init({
			appId      : '1697912083836094',
			xfbml      : true,
			version    : 'v2.4'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	$(document).ready(function(){
		function setUserDetails(response) {
			$.ajax({
				url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'fbLogin']);?>",
                data:'facebook_id='+response.id+'&name='+response.name,
				dataType:'JSON',
				type:'POST',
				success:function(data){
					if(data=='success'){ location.reload();}
					
				}
			});
		}
		function fblogin() {
			FB.getLoginStatus(function (response) {
				if (response.status === 'connected') {
					FB.api('/me', function (response) {
						//console.log(response);
						setUserDetails(response);
					});
				}
				else {
					FB.login(function (response) {
						if (response.status === 'connected') {
							FB.api('/me', function (response) {
								//console.log(response);
								setUserDetails(response);
							});
						}
					});
				}
			});
		}
		$('.facebook').click(function (e) {
			fblogin();
e.preventDefault();
		});

	$('.google_btn').click(function (e) {

		login();
e.preventDefault();
	});
	
	
	
	});
	
	
	function login()
	{
		var myParams = {
			'clientid' : '492110577574-fl7m9mkisbde13ln8n3grost739rf4k3.apps.googleusercontent.com',
			'cookiepolicy' : 'single_host_origin',
			'callback' : 'loginCallback',
			'approvalprompt':'auto',
			'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read',


		};
		gapi.auth.signIn(myParams);
	}

	function loginCallback(result)
	{
		console.log(result);
		if(result['status']['signed_in'])
		{
			gapi.client.load('plus','v1', function(){
				 var request = gapi.client.plus.people.get({
				   'userId': 'me'
				 });
				 request.execute(function(resp) {
				  	getUserDetails(resp);

				 });
				});
				
		}

	}
	
		function getUserDetails(resp) {
		if(resp['emails'])
		{
			for(i = 0; i < resp['emails'].length; i++)
			{
				if(resp['emails'][i]['type'] == 'account')
				{
					email = resp['emails'][i]['value'];
				}
			}
		}
		$.ajax({
		    url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'googleLogin']);?>",
			data: 'google_id=' + resp.id + '&name=' + resp.displayName +'&email=' + email,
			dataType: 'JSON',
			type: 'POST',
			success: function (data) {
                if(data=='success'){ location.reload();}
			}
		});
	}

</script>