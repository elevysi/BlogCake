<div class="uploads index">
	<h2><?php echo __('Uploads'); ?></h2>
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('filesize'); ?></th>
			<th><?php echo $this->Paginator->sort('filemine'); ?></th>
			<th><?php echo $this->Paginator->sort('link_table'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('file_identificator'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($uploads as $upload): ?>
	<tr>
		<td><?php echo h($upload['Upload']['id']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['title']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['description']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['filename']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['filesize']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['filemine']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['link_table']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['link']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['created']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['modified']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['path']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['file_identificator']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $upload['Upload']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $upload['Upload']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $upload['Upload']['id']), array(), __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
	
		<?php echo $this->Html->link(__('New Upload'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>		<?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index'), array('class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add'), array('class' => 'btn btn-default')); ?> 
	
</div>
