<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Add Tour</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-arrow-left"></i> Back',['controller'=>'Users','action'=>'index'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'User List']);?>
				</div>
			</div>
			<?php echo $this->Form->create($tour, ['type' => 'file']);?>
			<div class="box-body">
				<div class="col-md-8 col-md-offset-2">
					<div class="form-group">
						<?php echo $this->Form->input('title',['class'=>'form-control','label'=>'Title','div'=>false]);?>
<!--						<div class="error-message">--><?php //echo !empty();?><!--</div>-->
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('description',['class'=>'form-control','label'=>'Description','div'=>false]);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('price',['class'=>'form-control','label'=>'Price','div'=>false,'required'=>true]);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('start_date',['class'=>'form-control','label'=>'Start Date','div'=>false,'required'=>true]);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('end_date',['class'=>'form-control','label'=>'End Date','div'=>false]);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('time',['type'=>'text','class'=>'form-control']);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('city',['type'=>'text','class'=>'form-control','options'=>['admin'=>'Admin','user'=>'User'],'label'=>'City','div'=>false]);?>
					</div>

                    <div class="form-group">
                        <?php echo $this->Form->input('status',['type'=>'select','class'=>'form-control','options'=>['active'=>'Active','inactive'=>'Inactive','blocked'=>'Blocked'],'default'=>'active','label'=>'Status','div'=>false]);?>
                    </div>

					<div class="form-group">
						<?php echo $this->Form->input('name',['type'=>'file','class'=>'form-control','options'=>['1'=>'Yes','2'=>'No'],'default'=>'1','label'=>'Tour Photo','div'=>false]);?>
						<?php if(isset($image_error)) {

						?>
						<div class="error">Not Valid File</div>
						<?php } ?>
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