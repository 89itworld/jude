<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->

		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Add Category</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-arrow-left"></i> Back',['controller'=>'Categories','action'=>'index'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'Add User']);?>
				</div>
			</div>
					<?php echo $this->Form->create($category,['type'=>'file']);?>
					<div class="box-body">
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group">
								<?php echo $this->Form->input('name',['id'=>'category_name','class'=>'form-control','label'=>'Category Name','div'=>false]);?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('slug',['id'=>'slug','class'=>'form-control','label'=>'Slug','div'=>false,'readonly']);?>
							</div>
							<div class="form-group">
								<?php echo $this->Form->input('image',['class'=>'form-control','type'=>'file','label'=>'Image','style'=>'padding:0;','div'=>false,'required'=>true]);?>
							</div>
							<div class="checkbox">
								<?php echo $this->Form->input('status',['label'=>'Status','type'=>'checkbox','default'=>'1','div'=>false]);?>
							</div>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<div class="col-md-8 col-md-offset-2">
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>
					</div>
				<?php echo $this->Form->end();?>
			<!--<div class="box-footer">
				Footer
			</div>--><!-- /.box-footer-->
		</div><!-- /.box -->
	</section><!-- /.content -->
	<script type="text/javascript">
			function slug(text){
				var t=text.trim().toLowerCase().replace(/ /g,'-').replace(/[-]+/g, '-').replace(/[^\w-]+/g,'');
				$('#slug').val(t);
			}
			$('#category_name').keyup(function(){
				slug($(this).val());
			}).change(function(){
				slug($(this).val())
			});

	</script>
</div><!-- /.content-wrapper -->