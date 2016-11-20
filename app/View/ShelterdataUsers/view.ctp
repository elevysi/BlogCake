<div class="shelterdataUsers view">
<h2><?php echo __('Shelterdata User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security Descriptor'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['security_descriptor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fonction'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['fonction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($shelterdataUser['ShelterdataUser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shelterdata User'), array('action' => 'edit', $shelterdataUser['ShelterdataUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shelterdata User'), array('action' => 'delete', $shelterdataUser['ShelterdataUser']['id']), array(), __('Are you sure you want to delete # %s?', $shelterdataUser['ShelterdataUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shelterdata Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shelterdata User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
