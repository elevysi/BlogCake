<div class="siteVariables index">
	<h2><?php echo __('Site Variables'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('upper_left_text'); ?></th>
			<th><?php echo $this->Paginator->sort('page_title'); ?></th>
			<th><?php echo $this->Paginator->sort('welcome_title'); ?></th>
			<th><?php echo $this->Paginator->sort('welcome_text'); ?></th>
			<th><?php echo $this->Paginator->sort('logo_path'); ?></th>
			<th><?php echo $this->Paginator->sort('responsabe_title'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_description'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_title'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_description'); ?></th>
			<th><?php echo $this->Paginator->sort('copyright_text'); ?></th>
			<th><?php echo $this->Paginator->sort('record_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($siteVariables as $siteVariable): ?>
	<tr>
		<td><?php echo h($siteVariable['SiteVariable']['id']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['title']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['upper_left_text']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['page_title']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['welcome_title']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['welcome_text']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['logo_path']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['responsabe_title']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['responsable_description']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['contact_title']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['contact_description']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['copyright_text']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['record_owner']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['created']); ?>&nbsp;</td>
		<td><?php echo h($siteVariable['SiteVariable']['modified']); ?>&nbsp;</td>
		<td class="btn-group-vertical">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-hand-up"></span> View', array('action' => 'view', $siteVariable['SiteVariable']['id']), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Edit', array('action' => 'edit', $siteVariable['SiteVariable']['id']), array('class' => 'btn btn-sm btn-warning', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> Delete', array('action' => 'delete', $siteVariable['SiteVariable']['id']), array('class' => 'btn btn-sm btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $siteVariable['SiteVariable']['id'])); ?>
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
	
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> New Site Variable', array('action' => 'add'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>	
</div>
