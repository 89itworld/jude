<header id="header" class="navbar-static-top">

    <div class="main-header">

        <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
            Mobile Menu Toggle
        </a>

        <div class="container">
            <h1 class="logo navbar-brand">
                <?php echo $this->Html->link($this->Html->image('logo/logo.png', ['alt' => 'Judefly']), '/', ['escape' => false]); ?>
            </h1>

            <nav id="main-menu" role="navigation">
                <ul class="menu">
                    <li class="menu-item-has-children">
                        <?php echo $this->Html->link('Home', ['controller' => 'Searches','action' => 'index']); ?>
                    </li>
                    <li class="menu-item-has-children">
                        <?php echo $this->Html->link('HOTELS', ['controller' => 'Hotels','action' => 'index']); ?>
                        <ul>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <?php echo $this->Html->link('FLIGHTS', ['controller' => 'Flights','action' => 'index']); ?>
                        <ul>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <?php echo $this->Html->link('CARS', ['controller' => 'Cars','action' => 'index']); ?>
                        <ul>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <?php echo $this->Html->link('CRUISES', ['controller' => 'Cruises','action' => 'index']); ?>
                        <ul>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <?php echo $this->Html->link('TOUR', ['action' => '#']); ?>
                        <ul>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <nav id="mobile-menu-01" class="mobile-menu collapse">
            <ul id="mobile-primary-menu" class="menu">
                <li class="menu-item-has-children">
                    <?php echo $this->Html->link('Home', ['controller' => 'Searches','action' => 'index']); ?>
                </li>
                <li class="menu-item-has-children">
                    <?php echo $this->Html->link('HOTELS', ['controller' => 'Hotels','action' => 'index']); ?>
                    <ul>

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <?php echo $this->Html->link('FLIGHTS', ['controller' => 'Flights','action' => 'index']); ?>
                    <ul>

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <?php echo $this->Html->link('CARS', ['controller' => 'Cars','action' => 'index']); ?>
                    <ul>

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <?php echo $this->Html->link('CRUISES', ['controller' => 'Cruises','action' => 'index']); ?>
                    <ul>

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <?php echo $this->Html->link('TOUR', ['action' => '#']); ?>
                    <ul>

                    </ul>
                </li>
            </ul>

            <ul class="mobile-topnav container">
                <li><a href="#">MY ACCOUNT</a></li>
                <li class="ribbon language menu-color-skin">
                    <a href="#" data-toggle="collapse">ENGLISH</a>
                    <ul class="menu mini">

                    </ul>
                </li>
                <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                <li class="ribbon currency menu-color-skin">
                    <a href="#">USD</a>
                    <ul class="menu mini">

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div id="travelo-signup" class="travelo-signup-box travelo-box">
        <div class="login-social">
            <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
            <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
        </div>
        <div class="seperator"><label>OR</label></div>
        <div class="simple-signup">
            <div class="text-center signup-email-section">
                <?php echo $this->Html->link('<i class="soap-icon-letter"></i> Sign up with Email','#', array('class'=>'signup-email','escape'=> false)); ?>
            </div>
            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund
                olicy, and Host Guarantee Terms.</p>
        </div>
        <div class="email-signup">
            <?php echo $this->Form->create('signup',['id'=>'registrationForm']);?>

            <div class="form-group">
                <?php echo $this->Form->input('fname', array('type'=>'text','class'=>'input-text full-width','placeholder'=>'first name','required'=>'required','label'=>false)); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('lname', array('type'=>'text','class'=>'input-text full-width','placeholder'=>'last name','required'=>'required','label'=>false)); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('email', array('type'=>'email','class'=>'input-text full-width','id'=>'signup_email','placeholder'=>'email address','required'=>'required','label'=>false)); ?>
                <span id="signup_email_error" class="error" style="color: red"></span>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('password', array('type'=>'password','class'=>'input-text full-width','id'=>'signup_password','placeholder'=>'password','required'=>'required','label'=>false)); ?>
                <span id="signup_pass_error" class="error" style="color: red"></span>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('conf_password',array('type'=>'password','class'=>'input-text full-width','id'=>'signup_conf_pass','placeholder'=>'confirm password','required'=>'required','label'=>false)); ?>
                <span id="signup_conf_pass_error" class="error" style="color: red"></span>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('news',array('type'=>'checkbox','label'=>'Tell me about Travelo news')); ?>
            </div>
            <div class="form-group">
                <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest
                    Refund Policy, and Host Guarantee Terms.</p>
            </div>
            <?php echo $this->Form->button('SIGNUP', array('type'=>'submit','class'=>'full-width btn-medium','id'=>'sign_up')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
        <div class="seperator"></div>
        <p>Already a Travelo member?
            <?php echo $this->Html->link('Login','#travelo-login',array('class'=>'goto-login soap-popupbox')); ?>
        </p>
    </div>
    <div id="travelo-login" class="travelo-login-box travelo-box">
        <div class="login-social">
            <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
            <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
        </div>
        <div class="seperator"><label>OR</label></div>
        <span id="login_error" style="color: red"></span>
        <?php echo $this->Form->create('login',['id'=>'login']); ?>
        <div class="form-group">
            <?php echo $this->Form->input('email', array('type'=>'email','class'=>'input-text full-width','id'=>'login_email','placeholder'=>'email address','required'=>'required','label'=>false)); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('password', array('type'=>'password','class'=>'input-text full-width','id'=>'login_password','placeholder'=>'password','required'=>'required','label'=>false)); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Html->link('Forgot password?','#',array('class'=>'forgot-password pull-right'))?>
            <?php echo $this->Form->input('remember_me',array('type'=>'checkbox','label'=>'Remember me')); ?>
        </div>
        <?php echo $this->Form->button('LOGIN', array('type'=>'submit','class'=>'full-width btn-medium')); ?>
        <?php echo $this->Form->end(); ?>
        <div class="seperator"></div>
        <p>Don't have an account?
            <?php echo $this->Html->link('Sign up','#travelo-signup',array('class'=>'goto-signup soap-popupbox')); ?>
        </p>
    </div>
</header>