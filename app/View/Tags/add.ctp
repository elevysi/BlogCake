<div class="tags form">
<?php echo $this->Form->create('Tag'); ?>
	<fieldset>
		<legend><?php echo __('Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('post_id', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	

		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Tags', array('action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Posts', array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Post', array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
	
</div>
