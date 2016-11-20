<div class="responsibles index">
	<h2><?php echo __('Responsibles'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('function'); ?></th>
			<th><?php echo $this->Paginator->sort('responsability'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('show'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('citation'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook'); ?></th>
			<th><?php echo $this->Paginator->sort('linked_in'); ?></th>
			<th><?php echo $this->Paginator->sort('gmail'); ?></th>
			<th><?php echo $this->Paginator->sort('twitter'); ?></th>
			<th><?php echo $this->Paginator->sort('pin'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($responsibles as $responsible): ?>
	<tr>
		<td><?php echo h($responsible['Responsible']['id']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['function']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['responsability']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['address']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['phone']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['show']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['citation']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['facebook']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['linked_in']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['gmail']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['twitter']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['pin']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['created']); ?>&nbsp;</td>
		<td><?php echo h($responsible['Responsible']['modified']); ?>&nbsp;</td>
		<td class="btn-group-vertical">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-hand-up"></span> View', array('action' => 'view', $responsible['Responsible']['id']), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit', array('action' => 'edit', $responsible['Responsible']['id']), array('class' => 'btn btn-sm btn-warning', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $responsible['Responsible']['id']), array('class' => 'btn btn-sm btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $responsible['Responsible']['id'])); ?>
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
	
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Responsible', array('action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>	
</div>
