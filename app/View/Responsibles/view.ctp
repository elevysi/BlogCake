<div class="responsibles view">
<h2><?php  echo __('Responsible'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['function']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsability'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['responsability']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Citation'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['citation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linked In'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['linked_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gmail'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['gmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['pin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($responsible['Responsible']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Responsible'), array('action' => 'edit', $responsible['Responsible']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Responsible'), array('action' => 'delete', $responsible['Responsible']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $responsible['Responsible']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Responsibles'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Responsible'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
