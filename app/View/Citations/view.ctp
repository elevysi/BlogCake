<div class="citations view">
<h2><?php  echo __('Citation'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upload'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citation['Upload']['title'], array('controller' => 'uploads', 'action' => 'view', $citation['Upload']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Citation'), array('action' => 'edit', $citation['Citation']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Citation'), array('action' => 'delete', $citation['Citation']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $citation['Citation']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Citations'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Citation'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Uploads'), array('controller' => 'uploads', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Upload'), array('controller' => 'uploads', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
