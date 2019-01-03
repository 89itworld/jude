<div id="multi_source_<?php echo $key;?>">
	<div class="row pull-right">
		<div class="col-xs-12 form-group"><strong>Location Number: <span class="num-locations"><?php echo $key+1; ?></span></strong></div>
		<br>
		<span><a href="javascript:void(0)" onclick="remove_location(<?php echo $key;?>)" class="add_more btn btn-error pull-right add_more"  title="delete">Remove Location</a></span>
	</div>
	<div class="row">
		<div class="col-xs-12 form-group">
			<?php echo $this->Form->input('address['.$key.'][street]',['type'=>'text','class'=>'form-control','placeholder'=>'123 Street Address','label'=>'Street Address','data-validation'=>'required']); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 form-group">
			<?php echo $this->Form->input('address['.$key.'][city]',['type'=>'text','class'=>'form-control','placeholder'=>'City','label'=>'City','data-validation'=>'required'])?>
		</div>
		<div class="col-xs-12 col-sm-6 form-group">
			<?php echo $this->Form->input('address['.$key.'][zip]',['type'=>'text','class'=>'form-control','placeholder'=>'Zip','label'=>'Zip','data-validation'=>'required'])?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 form-group">
			<?php echo $this->Form->input('address['.$key.'][state]',[
				'options'=>$state,
				'class'=>'form-control',
				'label'=>'State',
				'data-validation'=>'required'
			])?>
		</div>
	</div>
</div>
