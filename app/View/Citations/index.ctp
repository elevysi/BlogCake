<div class="citations index">
	<h2><?php echo __('Citations'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('upload_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th><?php echo $this->Paginator->sort('show'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($citations as $citation): ?>
	<tr>
		<td><?php echo h($citation['Citation']['id']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['text']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($citation['Upload']['title'], array('controller' => 'uploads', 'action' => 'view', $citation['Upload']['id'])); ?>
		</td>
		<td><?php echo h($citation['Citation']['description']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['rank']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['show']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['created']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['modified']); ?>&nbsp;</td>
		<td class="btn-group-vertical">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-hand-up"></span> View', array('action' => 'view', $citation['Citation']['id']), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit', array('action' => 'edit', $citation['Citation']['id']), array('class' => 'btn btn-sm btn-warning', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $citation['Citation']['id']), array('class' => 'btn btn-sm btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $citation['Citation']['id'])); ?>
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
	
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Citation', array('action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> List Uploads', array('controller' => 'uploads', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Upload', array('controller' => 'uploads', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
