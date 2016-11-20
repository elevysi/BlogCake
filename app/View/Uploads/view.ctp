<div class="uploads view">
<h2><?php echo __('Upload'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filesize'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['filesize']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filemine'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['filemine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Table'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['link_table']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Identificator'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['file_identificator']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload'), array('action' => 'edit', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload'), array('action' => 'delete', $upload['Upload']['id']), array(), __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Citations'); ?></h3>
	<?php if (!empty($upload['Citation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Upload Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Rank'); ?></th>
		<th><?php echo __('Show'); ?></th>
		<th><?php echo __('Record Owner'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($upload['Citation'] as $citation): ?>
		<tr>
			<td><?php echo $citation['id']; ?></td>
			<td><?php echo $citation['text']; ?></td>
			<td><?php echo $citation['upload_id']; ?></td>
			<td><?php echo $citation['description']; ?></td>
			<td><?php echo $citation['rank']; ?></td>
			<td><?php echo $citation['show']; ?></td>
			<td><?php echo $citation['record_owner']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'citations', 'action' => 'view', $citation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'citations', 'action' => 'edit', $citation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'citations', 'action' => 'delete', $citation['id']), array(), __('Are you sure you want to delete # %s?', $citation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
