<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Category Listing</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-plus"></i> Add Category',['controller'=>'Categories','action'=>'add'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'Add Category']);?>
				</div>
			</div>
			<div class="box-body">
						<?php
							if(!empty($categories)) {
								?>
								<table class="table table-bordered table-striped table-hover">
									<tr>
										<th><?php echo $this->Paginator->sort('name','Category Name');?></th>
										<th>Slug</th>
										<th>Image</th>
										<th><?php echo $this->Paginator->sort('status','Status');?></th>
										<th>Actions</th>
									</tr>
									<?php
									foreach ($categories as $category) {
										?>
										<tr>
											<td><?php echo $category->name; ?></td>
											<td><?php echo $category->slug; ?></td>
											<td><?php echo $this->Html->image('categories/'.$category->image,['height'=>'100px']); ?></td>
											<td><?php echo $this->Html->link(($category->status==1)?'<i class="fa fa-check text-green" data-toggle="tooltip" title="Click to Deactivate"></i>':'<i class="fa fa-ban text-red" data-toggle="tooltip" title="Click to Activate"></i>' ,['controller'=>'Categories','action'=>'StatusUpdate',$category->id ],['escape'=>false]);?></td>
											<td>
												<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',['controller'=>'Categories','action'=>'edit',$category->id],['escape'=>false]);?>
												<?php echo $this->Form->postLink('<i class="fa fa-close"></i>',['controller'=>'Categories','action'=>'delete',$category->id],['escape'=>false,'confirm'=>'Are you sure you want to delete?']);?>
											</td>
										</tr>
										<?php
									}
									?>
								</table>
								<?php
							}
						?>


			</div><!-- /.box-body -->
			<!--<div class="box-footer">
				Footer
			</div>--><!-- /.box-footer-->
		</div><!-- /.box -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->