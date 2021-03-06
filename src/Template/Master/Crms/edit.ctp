<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Page Edit</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-arrow-left"></i> Back',['controller'=>'Crms','action'=>'index'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'User List']);?>
				</div>
			</div>
			<?php

			echo $this->Form->create($content);?>

			<div class="box-body">
				<div class="col-md-8 col-md-offset-2">
				<?php
				$message=$this->Flash->render('positive');
				if( $message !=''){ ?>
					<div class="success" style="background:lightgreen;padding:5px;">
						<?php echo $message ?>
					</div>
					<?php } ?>

					<div class="form-group">
						<?php echo $this->Form->input('title',['class'=>'form-control','label'=>'Title','div'=>false,'required'=>true]);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('link_title',['class'=>'form-control','label'=>'Link Title','div'=>false,'required'=>true]);?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('description',['class'=>'form-control','label'=>'Description','div'=>false]);?>
					</div>
					<?php echo $this->Html->script(['tiny_mce/tiny_mce.js']); ?>
					
					<div class="form-group">
						<?php echo $this->Form->input('meta_description',['class'=>'form-control','label'=>'Meta Description','div'=>false]);?>
					</div>

					<div class="form-group">
						<?php echo $this->Form->input('meta_keywords',['class'=>'form-control','label'=>'Meta Keywords','div'=>false]);?>
					</div>


                <?php
                $status=$content->status;
                echo $this->Form->input('status',['type'=>'select','options'=>['active'=>'Active','inactive'=>'Inactive'],'label'=>false,'div'=>false,'class'=>'form-control status','value'=>$status,'data-id'=>$content->id]);
                ?>
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
<script>
	tinyMCE.triggerSave();
	tinyMCE.init({
		editor_selector: 'description',
		mode : "exact",
		elements : "description",
	
		resize: false,
	});
</script>