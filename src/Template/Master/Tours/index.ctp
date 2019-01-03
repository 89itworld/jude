<!-- Content Wrapper. Contains page content -->

<div id="loading" style="display: none; width: 100%; z-index: 9999 ! important; position: fixed;">
	<div style="margin-left: 40%; margin-top: 12%;">
		<img src="/judefly/img/ajax_loader.gif" id="loading-image" alt="">	</div>
</div>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<?= $this->element('Admin/breadcrumbs');?>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Tour Listing</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-plus"></i> Add Tours',['controller'=>'Tours','action'=>'add'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'Add Tours']);?>
				</div>
			</div>

			<div class="box-body">
						<?php
                        //$temp=$users['_properties:protected'];
                        	if(!($tours->isEmpty())){

								?>
								<table class="table table-bordered table-striped table-hover">
									<tr>
										<th><?php echo $this->Paginator->sort('title','Title');?></th>
										<th><?php echo $this->Paginator->sort('description','Description');?></th>
										<th><?php echo $this->Paginator->sort('price','Price');?></th>
										<th><?php echo $this->Paginator->sort('start_date','Start Date');?></th>
										<th><?php echo $this->Paginator->sort('end_date','End Date');?></th>
										<th><?php echo $this->Paginator->sort('featured','Featured');?></th>
										<th><?php echo $this->Paginator->sort('status','Status');?></th>
<!--										<th>--><?php //echo $this->Paginator->sort('created','Created');?><!--</th>-->
										<th>Actions</th>
									</tr>
									<?php
									foreach ($tours as $user) {
										?>
										<tr>
											<td><?php echo $user->title; ?></td>
											<td><?php echo substr($user->description, 0, 80); ?></td>
											<td><?php echo $user->price; ?></td>
											<td><?php echo !empty($user->start_date)?$user->start_date->format('M d Y'):'N.A'; ?></td>
											<td><?php echo !empty($user->end_date)?$user->end_date->format('M d Y'):'N.A'; ?></td>
											<td>
												<?php echo $this->Html->link(($user->featured == 1)?'<i class="fa fa-check text-green" data-toggle="tooltip" title="Click to Deactivate"></i>':'<i class="fa fa-ban text-red" data-toggle="tooltip" title="Click to Activate"></i>' ,['controller'=>'Tours','action'=>'updateFeatured',$user->id,($user->featured == 1)?2:1],['escape'=>false]); ?>
											</td>

											<td><?php
                                                $status='';
                                                switch($user->status){
                                                    case '1':
                                                        $status='active';
                                                        break;
                                                    case '0':
                                                        $status='inactive';
                                                        break;
                                                    case '2':
                                                        $status='blocked';
                                                        break;
                                                    default:
                                                        $status='active';
                                                }

                                                echo $this->Form->input('status',['type'=>'select','options'=>['active'=>'Active','inactive'=>'Inactive','blocked'=>'Blocked'],'default'=>$status,'label'=>false,'div'=>false,'class'=>'form-control status','data-id'=>$user->id]);?></td>
<!--											<td>--><?php //echo $user->time ?><!--</td>-->
											<td>
												<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',['controller'=>'Tours','action'=>'edit',$user->id],['escape'=>false]);?>
												<?php echo $this->Form->postLink('<i class="fa fa-close"></i>',['controller'=>'Tours','action'=>'delete',$user->id],['escape'=>false,'confirm'=>'Are You sure you want to delete?']);?>
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


				<div class="row">

					<div class="col-sm-5">
						<?php echo $this->Html->link('Update Tours',['controller'=>'Tours','action'=>'update_tours'],['onclick'=>'showLoader()','class'=>'btn btn-primary']); ?>
					</div>
					<div class="col-sm-7 pull-right">
						<div id="example2_paginate" class="dataTables_paginate paging_simple_numbers">
							<ul class="pagination pull-right">
								<?php
								$this->Paginator->templates([
									'number' => '<li class="paginate_button"><a href="{{url}}">{{text}}</a></li>',
									'nextActive'=>'<li class="paginate_button"><a href="{{url}}"><i class="fa fa-caret-right"></i></a></li>',
									'prevActive'=>'<li class="paginate_button"><a href="{{url}}"><i class="fa fa-caret-left"></i></a></li>',
									'current'=>'<li class="paginate_button active"><a href="javascript:void(0)">{{text}}</a></li>',
									'nextDisabled'=>'',
									'prevDisabled'=>''
								]);
								echo $this->Paginator->prev();
								echo $this->Paginator->numbers();
								echo $this->Paginator->next();
								?>

							</ul>
						</div>
					</div>
				</div>

			</div><!-- /.box-body -->
			<!--<div class="box-footer">
				Footer
			</div>--><!-- /.box-footer-->
		</div><!-- /.box -->

	</section><!-- /.content -->

	<script type="text/javascript">
		function showLoader(){
			$('#loading').show();
		}

		$('.status').change(function(){
			var url='<?php echo $this->Url->build(['controller'=>'Tours','action'=>'changeStatus']);?>/'+$(this).data('id')+'/'+$(this).val();
			window.location.replace(url);
		});
	</script>
</div><!-- /.content-wrapper -->