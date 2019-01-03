    <section class="awe-parallax login-page-demo">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register-page__content">
                <div class="content-title">
                    <span>Welcome back</span>
                    <h2>Login Here!</h2>
                </div>
                <?php echo $this->Form->create('login'); ?>
                    <div class="form-item">
                        <?php echo $this->Form->input('email',['type'=>'email','label'=>'Email','required'=>'required','placeholder'=>'someone@example.com']);?>
                    </div>
                    <div class="form-item">
                        <?php echo $this->Form->input('password',['type'=>'password','label'=>'Password','required'=>'required','placeholder'=>'********']);?>
                    </div>
                    <?php echo $this->Html->link('Forgot Password',['controller'=>'Users','action'=>'forgotPassword'],['class'=>'forgot-password']); ?>

                    <div class="form-actions">
                        <?php echo $this->Form->input('Login',['type'=>'submit']); ?>
                    </div>
                <?php echo $this->Form->end(); ?>
                <div class="login-register-link">
                    Dont have account yet?
                    <?php echo $this->Html->link('Register HERE',['action'=>'register']); ?>
                </div>
            </div>
        </div>
    </section>