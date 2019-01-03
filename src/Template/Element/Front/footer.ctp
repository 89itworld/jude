<footer class="footer"><!-- Start:  Footer Area -->
    <div class="container">
        <div class="row" data-wow-duration="1.5s">
            <!-- Start: Your logo area -->
            <div class="logo col-xs-4 col-sm-4 col-md-4">
                <?php echo $this->Html->image('logo/judefly_trans_bg_logo.png?v',['class'=>'img-responsive','width'=>'110','alt'=>'']);?>
            </div>
            <!-- End: Your logo area -->

            <div class="part col-xs-8 col-sm-8 col-md-8">
                <div class="social_icon">
                    <ul class="navbar-right">
                        <!-- Social Icon Goes Here  -->
                        <li><a href="https://www.facebook.com/JudeflyTravel/?skip_nax_wizard=true" target="_blank"> <i class="fa facebook fa-facebook bg-transparent"></i> </a></li>
                        <li><a href="https://twitter.com/JudeFlyTRVL" target="_blank"> <i class="fa twitter fa-twitter bg-transparent"></i> </a></li>
                        <li><a href="https://www.instagram.com/judefly/" target="_blank"> <i class="fa instagram fa-instagram bg-transparent"></i> </a></li>
                    </ul>
                </div><!-- End:  "social_icon" -->
            </div><!-- End:  "part" -->
        </div><!-- End:  "row" -->
    </div><!-- End:  "container" -->
</footer><!-- End:  Footer Area -->

<!-- SCRIPTS -->

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>



<script type="text/javascript">
    if($('#slider-revolution').length) {
        $('#slider-revolution').show().revolution({
            ottedOverlay:"none",
            delay:10000,
            startwidth:1600,
            startheight:650,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,


            simplifyAll:"off",

            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",

            touchenabled:"on",
            onHoverStop:"on",
            nextSlideOnWindowFocus:"off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],


            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner2",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",



            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0
        });
    }
</script>
<!-- Gofer All Js -->

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
                if(response=='success'){
                    console.log(response);
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

</script>


