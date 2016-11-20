<div class="posts view">
<h2><?php  echo __('Post'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($post['Post']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo h($post['Post']['show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($post['Post']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Section']['section_identifier'], array('controller' => 'sections', 'action' => 'view', $post['Section']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Post'), array('action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Post'), array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Posts'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Post'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Sections'), array('controller' => 'sections', 'action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Section'), array('controller' => 'sections', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
<hr>
<div class="related">
	<h3><?php echo __('Related Sections'); ?></h3>
	<?php if (!empty($post['Section'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Section Identifier'); ?></th>
		<th><?php echo __('Record Owenr'); ?></th>
		<th><?php echo __('Show'); ?></th>
		<th><?php echo __('Rank'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($post['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id']; ?></td>
			<td><?php echo $section['section_identifier']; ?></td>
			<td><?php echo $section['record_owenr']; ?></td>
			<td><?php echo $section['show']; ?></td>
			<td><?php echo $section['rank']; ?></td>
			<td><?php echo $section['created']; ?></td>
			<td><?php echo $section['modified']; ?></td>
			<td class="btn-group-vertical">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-hand-up"></span> View'), array('controller' => 'sections', 'action' => 'view', $section['id']), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $section['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="btn-group-vertical">
			<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Section'), array('controller' => 'sections', 'action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?>	</div>
</div>
