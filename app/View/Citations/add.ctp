<div class="citations form">
<?php echo $this->Form->create('Citation'); ?>
	<fieldset>
		<legend><?php echo __('Add Citation'); ?></legend>
	<?php
		echo $this->Form->input('text', array('class' => 'form-control'));
		echo $this->Form->input('upload_id', array('class' => 'form-control'));
		echo $this->Form->input('description', array('class' => 'form-control'));
		echo $this->Form->input('rank', array('class' => 'form-control'));
		echo $this->Form->input('show', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	

		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Citations', array('action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Uploads', array('controller' => 'uploads', 'action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Upload', array('controller' => 'uploads', 'action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
	
</div>
