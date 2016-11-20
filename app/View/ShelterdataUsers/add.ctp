<div class="shelterdataUsers form">
<?php echo $this->Form->create('ShelterdataUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Shelterdata User'); ?></legend>
	<?php
		echo $this->Form->input('username', array('class' => 'form-control'));
		echo $this->Form->input('password', array('class' => 'form-control'));
		echo $this->Form->input('first_name', array('class' => 'form-control'));
		echo $this->Form->input('last_name', array('class' => 'form-control'));
		echo $this->Form->input('email', array('class' => 'form-control'));
		echo $this->Form->input('security_descriptor', array('class' => 'form-control'));
		echo $this->Form->input('fonction', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>

		<?php echo $this->Html->link(__('List Shelterdata Users'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' =>FALSE)); ?></div>
