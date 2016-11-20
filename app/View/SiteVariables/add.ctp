<div class="siteVariables form">
<?php echo $this->Form->create('SiteVariable'); ?>
	<fieldset>
		<legend><?php echo __('Add Site Variable'); ?></legend>
	<?php
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('upper_left_text', array('class' => 'form-control'));
		echo $this->Form->input('page_title', array('class' => 'form-control'));
		echo $this->Form->input('welcome_title', array('class' => 'form-control'));
		echo $this->Form->input('welcome_text', array('class' => 'form-control'));
		echo $this->Form->input('logo_path', array('class' => 'form-control'));
		echo $this->Form->input('responsabe_title', array('class' => 'form-control'));
		echo $this->Form->input('responsable_description', array('class' => 'form-control'));
		echo $this->Form->input('contact_title', array('class' => 'form-control'));
		echo $this->Form->input('contact_description', array('class' => 'form-control'));
		echo $this->Form->input('copyright_text', array('class' => 'form-control'));
		echo $this->Form->input('record_owner', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	

		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Site Variables', array('action' => 'index'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>	
</div>
