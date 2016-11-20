<div class="menuItems form">
<?php echo $this->Form->create('MenuItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Menu Item'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('section_id', array('class' => 'form-control'));
		echo $this->Form->input('text', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
		echo $this->Form->input('show', array('class' => 'form-control'));
		echo $this->Form->input('rank', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	

		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $this->Form->value('MenuItem.id')), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $this->Form->value('MenuItem.id'))); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Menu Items', array('action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Sections', array('controller' => 'sections', 'action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Section', array('controller' => 'sections', 'action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
	
</div>
