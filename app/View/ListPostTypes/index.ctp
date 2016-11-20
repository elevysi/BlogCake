<div class="listPostTypes index">
	<h2><?php echo __('List Post Types'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('moodified'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('show'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($listPostTypes as $listPostType): ?>
	<tr>
		<td><?php echo h($listPostType['ListPostType']['id']); ?>&nbsp;</td>
		<td><?php echo h($listPostType['ListPostType']['name']); ?>&nbsp;</td>
		<td><?php echo h($listPostType['ListPostType']['created']); ?>&nbsp;</td>
		<td><?php echo h($listPostType['ListPostType']['moodified']); ?>&nbsp;</td>
		<td><?php echo h($listPostType['ListPostType']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($listPostType['ListPostType']['show']); ?>&nbsp;</td>
		<td><?php echo h($listPostType['ListPostType']['rank']); ?>&nbsp;</td>
		<td class="btn-group-vertical">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-hand-up"></span> View', array('action' => 'view', $listPostType['ListPostType']['id']), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit', array('action' => 'edit', $listPostType['ListPostType']['id']), array('class' => 'btn btn-sm btn-warning', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $listPostType['ListPostType']['id']), array('class' => 'btn btn-sm btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $listPostType['ListPostType']['id'])); ?>
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
	
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New List Post Type', array('action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>	
</div>