<div class="menuItems view">
<h2><?php  echo __('Menu Item'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menuItem['Section']['section_identifier'], array('controller' => 'sections', 'action' => 'view', $menuItem['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Menu Item'), array('action' => 'edit', $menuItem['MenuItem']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Menu Item'), array('action' => 'delete', $menuItem['MenuItem']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $menuItem['MenuItem']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Menu Items'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Menu Item'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Sections'), array('controller' => 'sections', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Section'), array('controller' => 'sections', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
