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
				<h3 class="box-title">Pages Listing</h3>
				<div class="box-tools pull-right">
					<?php echo $this->Html->link('<i class="fa fa-plus"></i> Add Page',['controller'=>'Crms','action'=>'add'],['escape'=>false,'class'=>'btn btn-box-tool','data-toggle'=>'tooltip','title'=>'Add Page']);?>
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
				if(!($contents->isEmpty())){

					?>
					<table class="table table-bordered table-striped table-hover">
						<tr>
							<th><?php echo $this->Paginator->sort('title','Title');?></th>

							<th><?php echo $this->Paginator->sort('status','Status');?></th>
							<!--										<th>--><?php //echo $this->Paginator->sort('created','Created');?><!--</th>-->
							<th>Actions</th>
						</tr>
						<?php
						foreach ($contents as $user) {

							?>
							<tr>
								<td><?php echo $user->title;

									?></td>


								<td><?php
									$status=$user->status;
									echo $this->Form->input('status',['type'=>'select','options'=>['active'=>'Active','inactive'=>'Inactive'],'default'=>$status,'label'=>false,'div'=>false,'class'=>'form-control status','data-id'=>$user->id]);?></td>
								<!--											<td>--><?php //echo $user->time ?><!--</td>-->
								<td>
									<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',['controller'=>'Crms','action'=>'edit',$user->id],['escape'=>false]);?>
									<?php echo $this->Form->postLink('<i class="fa fa-close"></i>',['controller'=>'Crms','action'=>'delete',$user->id],['escape'=>false,'confirm'=>'Are You sure you want to delete?']);?>
								</td>
							</tr>
							<?php
						}
						?>
					</table>
					<?php
				}else {
					echo "Pages Not Found!!!";
				}
				?>
				<div class="row">
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
			var url='<?php echo $this->Url->build(['controller'=>'Crms','action'=>'changeStatus']);?>/'+$(this).data('id')+'/'+$(this).val();
			window.location.replace(url);
		});
	</script>
</div><!-- /.content-wrapper -->