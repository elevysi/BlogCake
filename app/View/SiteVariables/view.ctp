<div class="siteVariables view">
<h2><?php  echo __('Site Variable'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upper Left Text'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['upper_left_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Title'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['page_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welcome Title'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['welcome_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welcome Text'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['welcome_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Path'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['logo_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsabe Title'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['responsabe_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable Description'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['responsable_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Title'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['contact_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Description'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['contact_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copyright Text'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['copyright_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Owner'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['record_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($siteVariable['SiteVariable']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="btn-group-vertical">
	<h3><?php echo __('Actions'); ?></h3>
	
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span> Edit Site Variable'), array('action' => 'edit', $siteVariable['SiteVariable']['id']), array('class' => 'btn btn-md btn-warning', 'escape' => FALSE)); ?> 
		<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span> Delete Site Variable'), array('action' => 'delete', $siteVariable['SiteVariable']['id']), array('class' => 'btn btn-md btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $siteVariable['SiteVariable']['id'])); ?>
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list-alt"></span> List Site Variables'), array('action' => 'index'), array('class' => 'btn btn-md btn-success', 'escape' => FALSE)); ?> 
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>  New Site Variable'), array('action' => 'add'), array('class' => 'btn btn-md btn-primary', 'escape' => FALSE)); ?> 
	
</div>
