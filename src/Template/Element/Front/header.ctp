<!-- PAGE WRAP -->
<div id="page-wrap">
    <!-- PRELOADER -->
    <!-- <div class="preloader"></div> -->
    <!-- END / PRELOADER -->

    <!-- PRELOADER -->
    <!--    <div class="spinner-wrapper">-->
    <!--        <div class="bubblingG">-->
    <!--            <span id="bubblingG_1"></span>-->
    <!--            <span id="bubblingG_2"></span>-->
    <!--            <span id="bubblingG_3"></span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- /END PRELOADER -->

    <!-- HEADER PAGE -->
    <header id="header-page">
        <div class="header-page__inner">
            <div class="container">
                <!-- LOGO -->
                <div class="logo">
                    <?php echo $this->Html->link($this->Html->image('logo/logo.png', ['alt' => 'Judefly']), '/', ['escape' => false]); ?>
                </div>
                <!-- END / LOGO -->

                <!-- NAVIGATION -->
                <nav class="navigation awe-navigation" data-responsive="1200">
                    <ul class="menu-list">
                        <li class="menu-item-has-children">
                            <?php echo $this->Html->link('Home', '/'); ?>
                        </li>

                        <li class="menu-item-has-children <?php echo ($this->request->params['controller'] == 'Flights') ? 'current-menu-parent' : ''; ?>">
                            <?php echo $this->Html->link('Flight', ['controller' => 'Homes', 'action' => 'index']); ?>
                        </li>

                        <li class="menu-item-has-children <?php echo ($this->request->params['controller'] == 'Blogs') ? 'current-menu-parent' : ''; ?>">
                            <?php echo $this->Html->link('Blog', ['controller' => 'Blogs', 'action' => 'index']); ?>
                        </li>

                        <?php if (empty($this->request->session()->read('Auth.User'))) {
//                            $this->request->session()->read('Auth.User')
                            ?>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#loginSignup">Sign Up /
                                    Log In</a>
                                <!-- Large modal -->
                            </li>
                        <?php } else { ?>

                            <li class="menu-item-has-children <?php echo ($this->request->params['action'] == 'login') ? 'current-menu-parent' : ''; ?>">
                                <?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']); ?>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- TOGGLE MENU RESPONSIVE -->
                <a class="toggle-menu-responsive" href="#">
                    <div class="hamburger">
                        <span class="item item-1"></span>
                        <span class="item item-2"></span>
                        <span class="item item-3"></span>
                    </div>
                </a>
                <!-- END / TOGGLE MENU RESPONSIVE -->
            </div>
        </div>
</header>
<!-- END / HEADER PAGE -->
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
                                                <a href="#" class="btn btn-block google-plus-bg text-white social-btns"><i
                                                        class="fa fa-google-plus bg-transparent right-margin-20"></i>
                                                    SIGNUP USING GOOGLE+</a>
                                            </div>
                                            <div class="or font-20 top-margin-20 bottom-margin-10">
                                                OR
                                            </div>
                                            <?php echo $this->Form->create('signup', ['id' => 'registrationForm', 'class' => 'text-black']); ?>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control', 'id' => 'signup_email', 'placeholder' => 'email address', 'required' => 'required', 'label' => false)); ?>
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
                                                <a href="#" class="btn btn-block google-plus-bg text-white social-btns"><i
                                                        class="fa fa-google-plus bg-transparent right-margin-20"></i>
                                                    LOGIN USING GOOGLE+</a>
                                            </div>
                                            <div class="or font-20 top-margin-20 bottom-margin-10">
                                                OR
                                            </div>
                                            <span id="login_error" style="color: red"></span>

                                            <?php echo $this->Form->create('login', ['id' => 'loginForm', 'class' => 'text-black']); ?>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control', 'id' => 'signup_email', 'placeholder' => 'email address', 'required' => 'required', 'label' => false)); ?>
                                            </div>
                                            <div class="form-group bottom-margin-0">
                                                <?php echo $this->Form->input('password', array('type' => 'password', 'class' => 'form-control', 'id' => 'signup_password', 'placeholder' => 'Create Password', 'required' => 'required', 'label' => false)); ?>
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
<script>
		window.fbAsyncInit = function() {
		FB.init({
			appId      : '529717527176330',
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
				url:"https://www.whitecashback.in/fblogin",
                            data:'facebook_id='+response.id+'&name='+response.name+"&_token={{ csrf_token() }}",
				dataType:'JSON',
				type:'POST',
				success:function(data){
					 
					 
					if(data['errors']==true){
                                    if(data['status']=='field_fail') {
                                        messages = data['errors_text'];
                                        $.each(messages, function (index, value) {

                                            $("#" + index + "_error").html(value);
                                        });
                                    }else{
                                        $("#error_message").html(data['errors_text'])
                                        $("#error_div").fadeIn('slow', function () {
                                            $(this).delay(1000).fadeOut('slow');
                                            // $("#error_message").html('')
                                        });


                                    }
                                }else{
                                    redirect=data['redirect_to'];
                                    if(redirect=='home')
                                        window.location.href=SITE_URL
                                    else {
                                        if (redirect != '' || redirect != undefined) {
                                            if (redirect.indexOf('http') > -1)
                                                window.location.href = redirect;
                                            else
                                                window.location.href = SITE_URL + redirect;
                                        }
                                    }
                                    $("#success_div").css('display','block');
                                    $("#success_message").html(data['errors_text'])
                                }
					
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

	$('#google_btn').click(function (e) {

		login();
e.preventDefault();
	});
	});
	
</script>
