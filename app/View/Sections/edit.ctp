<div class="sections form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Edit Section'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('section_identifier', array('class' => 'form-control'));
		echo $this->Form->input('record_owenr', array('class' => 'form-control'));
		echo $this->Form->input('show', array('class' => 'form-control'));
		echo $this->Form->input('rank', array('class' => 'form-control'));
		echo $this->Form->input('section_class', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	

		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $this->Form->value('Section.id')), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $this->Form->value('Section.id'))); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Sections', array('action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Menu Items', array('controller' => 'menu_items', 'action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Menu Item', array('controller' => 'menu_items', 'action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Posts', array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Post', array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
	
</div>
