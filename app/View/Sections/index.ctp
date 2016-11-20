<div class="sections index">
	<h2><?php echo __('Sections'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('section_identifier'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owenr'); ?></th>
			<th><?php echo $this->Paginator->sort('show'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('section_class'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sections as $section): ?>
	<tr>
		<td><?php echo h($section['Section']['id']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['section_identifier']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['record_owenr']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['show']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['rank']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['created']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['modified']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['section_class']); ?>&nbsp;</td>
		<td class="btn-group-vertical">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-hand-up"></span> View', array('action' => 'view', $section['Section']['id']), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit', array('action' => 'edit', $section['Section']['id']), array('class' => 'btn btn-sm btn-warning', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $section['Section']['id']), array('class' => 'btn btn-sm btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?>
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
	
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Section', array('action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Menu Items', array('controller' => 'menu_items', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Menu Item', array('controller' => 'menu_items', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Posts', array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Post', array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
