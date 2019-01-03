<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<!--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
				<?= $this->Html->image('user2-160x160.jpg',['class'=>'img-circle',
				                                            'alt'=>'User Image']);?>
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<!--<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
			</div>
		</form>-->
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>

			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span><!-- <i class="fa fa-angle-left pull-right"></i>-->
				</a>
			</li>
			<li class="<?= ($this->request->params['action']=='Users')?'active':'';?>">
				<?= $this->Html->link('<i class="fa fa-users"></i> <span>Tours</span>',
					['controller'=>'Users','action'=>'index'],['escape'=>false]);?>
			</li>
			<li class="<?= ($this->request->params['action']=='Users')?'active':'';?>">
				<?= $this->Html->link('<i class="fa fa-users"></i> <span>Content Management</span>',
					['controller'=>'Crms','action'=>'index'],['escape'=>false]);?>
			</li>
			<li class="<?= ($this->request->params['action']=='Users')?'active':'';?>">
				<?= $this->Html->link('<i class="fa fa-users"></i> <span>User Management</span>',
					['controller'=>'Users','action'=>'userListing'],['escape'=>false]);?>
			</li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>