<div class="sections view">
<h2><?php  echo __('Section'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section Identifier'); ?></dt>
		<dd>
			<?php echo h($section['Section']['section_identifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owenr'); ?></dt>
		<dd>
			<?php echo h($section['Section']['record_owenr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo h($section['Section']['show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($section['Section']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($section['Section']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($section['Section']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section Class'); ?></dt>
		<dd>
			<?php echo h($section['Section']['section_class']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Section'), array('action' => 'edit', $section['Section']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Section'), array('action' => 'delete', $section['Section']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Sections'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Section'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Menu Items'), array('controller' => 'menu_items', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Menu Item'), array('controller' => 'menu_items', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Posts'), array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Post'), array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
<hr>
<div class="related">
	<h3><?php echo __('Related Menu Items'); ?></h3>
	<?php if (!empty($section['MenuItem'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Record Owner'); ?></th>
		<th><?php echo __('Show'); ?></th>
		<th><?php echo __('Rank'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['MenuItem'] as $menuItem): ?>
		<tr>
			<td><?php echo $menuItem['id']; ?></td>
			<td><?php echo $menuItem['section_id']; ?></td>
			<td><?php echo $menuItem['text']; ?></td>
			<td><?php echo $menuItem['record_owner']; ?></td>
			<td><?php echo $menuItem['show']; ?></td>
			<td><?php echo $menuItem['rank']; ?></td>
			<td><?php echo $menuItem['created']; ?></td>
			<td><?php echo $menuItem['modified']; ?></td>
			<td class="btn-group-vertical">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-hand-up"></span> View'), array('controller' => 'menu_items', 'action' => 'view', $menuItem['id']), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit'), array('controller' => 'menu_items', 'action' => 'edit', $menuItem['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete'), array('controller' => 'menu_items', 'action' => 'delete', $menuItem['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $menuItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="btn-group-vertical">
			<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Menu Item'), array('controller' => 'menu_items', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>	</div>
</div>
<hr>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($section['Post'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Record Owner'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Show'); ?></th>
		<th><?php echo __('Rank'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['content']; ?></td>
			<td><?php echo $post['record_owner']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td><?php echo $post['show']; ?></td>
			<td><?php echo $post['rank']; ?></td>
			<td><?php echo $post['section_id']; ?></td>
			<td class="btn-group-vertical">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-hand-up"></span> View'), array('controller' => 'posts', 'action' => 'view', $post['id']), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="btn-group-vertical">
			<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Post'), array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>	</div>
</div>
