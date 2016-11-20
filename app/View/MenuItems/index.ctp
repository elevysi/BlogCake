<div class="menuItems index">
	<h2><?php echo __('Menu Items'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('show'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menuItems as $menuItem): ?>
	<tr>
		<td><?php echo h($menuItem['MenuItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($menuItem['Section']['section_identifier'], array('controller' => 'sections', 'action' => 'view', $menuItem['Section']['id'])); ?>
		</td>
		<td><?php echo h($menuItem['MenuItem']['text']); ?>&nbsp;</td>
		<td><?php echo h($menuItem['MenuItem']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($menuItem['MenuItem']['show']); ?>&nbsp;</td>
		<td><?php echo h($menuItem['MenuItem']['rank']); ?>&nbsp;</td>
		<td><?php echo h($menuItem['MenuItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($menuItem['MenuItem']['modified']); ?>&nbsp;</td>
		<td class="btn-group-vertical">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-hand-up"></span> View', array('action' => 'view', $menuItem['MenuItem']['id']), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit', array('action' => 'edit', $menuItem['MenuItem']['id']), array('class' => 'btn btn-sm btn-warning', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $menuItem['MenuItem']['id']), array('class' => 'btn btn-sm btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $menuItem['MenuItem']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Menu Item', array('action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Sections', array('controller' => 'sections', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Section', array('controller' => 'sections', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
