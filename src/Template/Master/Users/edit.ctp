<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<?php
			$message=$this->Flash->render('positive');
			if( $message !=''){ ?>
				<div class="success" style="background:lightgreen;padding:5px;">
					<?php echo $message ?>
				</div>
			<?php } ?>
			<div class="box-header with-border">
				<h3 class="box-title">Edit User</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-arrow-left"></i> Back',['controller'=>'Users','action'=>'user-listing'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'User List']);?>
				</div>
			</div>
			<?php echo $this->Form->create($user);?>
			<div class="box-body">
				<div class="col-md-8 col-md-offset-2">
					<div class="form-group">
						<?php echo $this->Form->input('email',['class'=>'form-control','label'=>'Email','div'=>false]);?>
						<div class="error-message"><?php echo !empty($errors['email'])?$errors['email']:''; ?></div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('status',['type'=>'select','class'=>'form-control','options'=>['active'=>'Active','inactive'=>'Inactive'],'default'=>'active','label'=>'Status','div'=>false]);?>
						<div class="error-message"><?php echo !empty($errors['status'])?$errors['status']:''; ?></div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('user_type',['type'=>'select','class'=>'form-control','options'=>['user'=>'User','admin'=>'Admin'],'default'=>'user','label'=>'User Type','div'=>false]);?>
						<div class="error-message"><?php echo !empty($errors['user_type'])?$errors['user_type']:''; ?></div>

					</div>
					<div class="form-group">
						<?php echo $this->Form->input('password',['class'=>'form-control','label'=>'Password','div'=>false]);?>
						<div class="error-message"><?php echo !empty($errors['password'])?$errors['password']:''; ?></div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('cpassword',['class'=>'form-control','label'=>'Confirm Password','div'=>false,'type'=>'password']);?>
					</div>

				</div>
			</div><!-- /.box-body -->
			<div class="box-footer">
				<div class="col-md-8 col-md-offset-2">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</div>
			<?php echo $this->Form->end();?><!-- /.box-body -->
			<!--<div class="box-footer">
				Footer
			</div>--><!-- /.box-footer-->
		</div><!-- /.box -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->