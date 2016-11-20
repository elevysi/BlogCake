<div class="messages form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<legend><?php echo __('Add Message'); ?></legend>
	<?php
		echo $this->Form->input('object', array('class' => 'form-control'));
		echo $this->Form->input('sender', array('class' => 'form-control'));
		echo $this->Form->input('recipients', array('class' => 'form-control'));
		echo $this->Form->input('body', array('class' => 'form-control'));
		echo $this->Form->input('show', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>

		<?php echo $this->Html->link(__('List Messages'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' =>FALSE)); ?></div>
