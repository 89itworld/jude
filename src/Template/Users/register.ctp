<section class="awe-parallax register-page-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register-page__content">
            <div class="content-title">
                <h4>Registeration Here !</h4>
            </div>
            <?php echo $this->Form->create($user); ?>
            <div class="form-item">
                <?php echo $this->Form->input('fname',['type'=>'text','label'=>'First Name','required'=>'required']);?>
            </div>
            <div class="form-item">
                <?php echo $this->Form->input('lname',['type'=>'text','label'=>'Last Name','required'=>'required']);?>
            </div>
            <div class="form-item">
                <?php echo $this->Form->input('email',['type'=>'email','label'=>'Email','required'=>'required']);?>
            </div>
            <div class="form-item">
                <?php echo $this->Form->input('password',['type'=>'password','label'=>'Password','required'=>'required']);?>
            </div>
            <?php echo $this->Html->link('By registering, you accept terms & conditions','#',['class'=>'terms-conditions']); ?>

            <div class="form-actions">
                <?php echo $this->Form->input('Register',['type'=>'submit']); ?>
            </div>

            <?php echo $this->Form->end(); ?>
            <div class="login-register-link">
                Already have Account?
                <?php echo $this->Html->link('Log in HERE',['action'=>'login']); ?>
            </div>
        </div>
    </div>
</section>