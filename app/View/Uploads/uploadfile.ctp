<div class="uploads form">
<?php echo $this->Form->create('Upload', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Upload'); ?></legend>
	<?php
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('description', array('class' => 'form-control'));
		echo $this->Form->input('uploadfile', array('label' => FALSE, 'type' => 'file', 'class' => 'btn btn-default'));
		
		
	?>
	</fieldset>
<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>

		<?php echo $this->Html->link(__('List Uploads'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' =>FALSE)); ?>		<?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index'), array('class' => 'btn btn-default', 'escape' =>FALSE)); ?> 
		<?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add'), array('class' => 'btn btn-default', 'escape' =>FALSE)); ?> 
</div>
