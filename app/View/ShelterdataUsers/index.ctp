<div class="shelterdataUsers index">
	<h2><?php echo __('Shelterdata Users'); ?></h2>
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('security_descriptor'); ?></th>
			<th><?php echo $this->Paginator->sort('fonction'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($shelterdataUsers as $shelterdataUser): ?>
	<tr>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['id']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['username']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['password']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['email']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['security_descriptor']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['fonction']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['created']); ?>&nbsp;</td>
		<td><?php echo h($shelterdataUser['ShelterdataUser']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shelterdataUser['ShelterdataUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shelterdataUser['ShelterdataUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shelterdataUser['ShelterdataUser']['id']), array(), __('Are you sure you want to delete # %s?', $shelterdataUser['ShelterdataUser']['id'])); ?>
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
	
		<?php echo $this->Html->link(__('New Shelterdata User'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>	
</div>
