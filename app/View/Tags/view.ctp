<div class="tags view">
<h2><?php  echo __('Tag'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tag['Post']['title'], array('controller' => 'posts', 'action' => 'view', $tag['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Tag'), array('action' => 'edit', $tag['Tag']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Tags'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Tag'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Posts'), array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Post'), array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
