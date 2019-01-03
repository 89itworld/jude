<section class="content-header">
	<h1>
		<?php $page=$this->request->params['controller']=="Crms"?"Content Management Pages":$this->request->params['controller']; ?>
		<?= $this->Html->link($page,['controller'=>$this->request->params['controller'],'action'=>'index']);?>
		<small><?= ($this->request->params['action']=='index')?'List':ucwords($this->request->params['action']);?></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><?= $this->Html->link($this->request->params['controller'],['controller'=>$this->request->params['controller'],'action'=>'index']);?></li>
		<li class="active"><?= ($this->request->params['action']=='index')?'List':ucwords($this->request->params['action']);?></li>
	</ol>
</section>