<div class="listPostTypes view">
<h2><?php  echo __('List Post Type'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Moodified'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['moodified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($listPostType['ListPostType']['rank']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit List Post Type'), array('action' => 'edit', $listPostType['ListPostType']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete List Post Type'), array('action' => 'delete', $listPostType['ListPostType']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $listPostType['ListPostType']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List List Post Types'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New List Post Type'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
