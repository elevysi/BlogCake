<div class="responsibles form">
<?php echo $this->Form->create('Responsible'); ?>
	<fieldset>
		<legend><?php echo __('Edit Responsible'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('first_name', array('class' => 'form-control'));
		echo $this->Form->input('last_name', array('class' => 'form-control'));
		echo $this->Form->input('function', array('class' => 'form-control'));
		echo $this->Form->input('responsability', array('class' => 'form-control'));
		echo $this->Form->input('address', array('class' => 'form-control'));
		echo $this->Form->input('phone', array('class' => 'form-control'));
		echo $this->Form->input('show', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
		echo $this->Form->input('citation', array('class' => 'form-control'));
		echo $this->Form->input('facebook', array('class' => 'form-control'));
		echo $this->Form->input('linked_in', array('class' => 'form-control'));
		echo $this->Form->input('gmail', array('class' => 'form-control'));
		echo $this->Form->input('twitter', array('class' => 'form-control'));
		echo $this->Form->input('pin', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	

		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $this->Form->value('Responsible.id')), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $this->Form->value('Responsible.id'))); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Responsibles', array('action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>	
</div>
