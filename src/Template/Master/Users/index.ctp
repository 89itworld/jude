<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">User Listing</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-plus"></i> Add Users',['controller'=>'Users','action'=>'add'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'Add Users']);?>
				</div>
			</div>
			<div class="box-body">

				<?php
				$message=$this->Flash->render('positive');
				if( $message !=''){ ?>
					<div class="success" style="background:lightgreen;padding:5px;">
						<?php echo $message ?>
					</div>
				<?php } ?>
						<?php
                        //$temp=$users['_properties:protected'];
                        	if(!($users->isEmpty())){

								?>
								<table class="table table-bordered table-striped table-hover">
									<tr>
										<th><?php echo $this->Paginator->sort('email','Email');?></th>
									    <th><?php echo $this->Paginator->sort('status','Status');?></th>
										<th><?php echo $this->Paginator->sort('created','Created');?></th>
										<th>Actions</th>
									</tr>
									<?php
									foreach ($users as $user) {
										?>
										<tr>
											<td><?php echo $user->email; ?></td>
											<td>
												<?php
												$status=$user->status;
												echo $this->Form->input('status',['type'=>'select','options'=>['active'=>'Active','inactive'=>'Inactive'],'default'=>$status,'label'=>false,'div'=>false,'class'=>'form-control status','data-id'=>$user->id]);?></td>
											<td><?php echo !empty($user->created)?$user->created->format('M d Y'):'N.A'; ?></td>


											<td>
												<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',['controller'=>'Users','action'=>'edit',$user->id],['escape'=>false]);?>
												<?php echo $this->Form->postLink('<i class="fa fa-close"></i>',['controller'=>'Users','action'=>'delete',$user->id],['escape'=>false,'confirm'=>'Are You sure you want to delete?']);?>
											</td>
										</tr>
										<?php
									}
									?>
								</table>
								<?php
							}else {
                                echo "Tour List Not Found!!!";
                         }
						?>

			</div><!-- /.box-body -->
			<!--<div class="box-footer">
				Footer
			</div>--><!-- /.box-footer-->
		</div><!-- /.box -->

	</section><!-- /.content -->
	<script type="text/javascript">
		$('.status').change(function(){
			var url='<?php echo $this->Url->build(['controller'=>'Users','action'=>'changeStatus']);?>/'+$(this).data('id')+'/'+$(this).val();
			window.location.replace(url);
		});
	</script>
</div><!-- /.content-wrapper -->