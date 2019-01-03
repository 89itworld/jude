<section class="awe-parallax login-page-demo">
	<div class="awe-overlay"></div>
	<div class="container">
		<div class="login-register-page__content">
			<div class="content-title">
				<span>Forgot password?</span>
				<h2>We Are here to help!</h2>
			</div>
			<?php echo $this->Form->create('forgotPassword'); ?>
			<div class="form-item">
				<?php echo $this->Form->input('email',['type'=>'email','label'=>'Email','required'=>'required','placeholder'=>'someone@example.com']);?>
			</div>
			<div class="form-actions">
				<?php echo $this->Form->input('Submit',['type'=>'submit']); ?>
			</div>
			<?php echo $this->Form->end(); ?>
			<div class="login-register-link">
				Dont have account yet?
				<?php echo $this->Html->link('Register HERE',['action'=>'register']); ?>
			</div>
		</div>
	</div>
</section>