<div class="news form">
<?php echo $this->Form->create('News'); ?>
	<fieldset>
		<legend><?php echo __('Add News'); ?></legend>
	<?php
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('newstext', array('class' => 'form-control'));
		echo $this->Form->input('footer', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>

		<?php echo $this->Html->link(__('List News'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' =>FALSE)); ?></div>
