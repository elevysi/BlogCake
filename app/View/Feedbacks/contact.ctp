<div class="container">
<?php echo $this->Form->create('Feedback', array('class' => 'form-horizontal')); ?>	
<fieldset>
		<legend><?php echo __('SEND ME FEEDBACK'); ?></legend>
	<div class="form-group"><?php echo $this->Form->input('subject', array('class' => 'form-control', 'placeholder' => 'Subject'));?></div>
	<div class="form-group"><?php echo $this->Form->input('Email', array('class' => 'form-control', 'placeholder' => 'Email', 'required')); ?></div>
	<div class="form-group"><?php echo $this->Form->input('message', array('class' => 'form-control', 'placeholder' => 'Message', 'type' => 'textarea')); ?></div>
	<?php 
		echo $this->Form->input('website', array('type' => 'hidden', 'label' => FALSE));
	?>
	</fieldset>
<?php echo $this->Form->submit(__('SEND'), array('class' => 'btn btn-primary')); ?>
	</div>

    






