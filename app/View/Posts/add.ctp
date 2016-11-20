
<?php $this->Html->addCrumb($this->Html->tag('li', $this->Html->link(' Add Post', array('controller' => 'posts', 'action' => 'add')), array('class' => 'active'))); ?>

<?php echo $this->Form->create('Post', array('type' => 'file', 'novalidate' => TRUE, 'class' => 'sky-form')); ?>
<header><?php echo __('Add Post'); ?></header>
	<fieldset>
	
		<section>
			<label class="label">Post Title</label>
			<label class="input">
			<?php echo $this->Form->input('title', array('label' => FALSE)); ?>
			</label>
		</section>
		
		<section>
			<label class="label">Content</label>
			<label class="input">
			<?php echo $this->Form->input('content', array('label' => FALSE)); ?>
			</label>
		</section>
		
	</fieldset>
	
	<fieldset>
	
	
		<section>
			<label class="label">Embedded</label>
			<label class="input">
			<?php echo $this->Form->input('uploadembedded', array('label' => FALSE)); ?>
			</label>
		</section>
	</fieldset>
	
	
	<fieldset>
	
		<section>
			<label class="label">File input</label>
            <label for="file" class="input input-file">
            	<div class="button"><?php echo $this->Form->input('uploadfile', array('type' => 'file','label' => FALSE, 'onchange' => "this.parentNode.nextSibling.value = this.value", 'id' => "file")); ?>Browse</div><input type="text" readonly>
            </label>
            
		</section>
		
		<section>
			<label class="label">File Title</label>
			<label class="input">
			<?php echo $this->Form->input('filetitle', array('label' => FALSE)); ?>
			</label>
		</section>
		
		<section>
			<label class="label">File Description</label>
			<label class="input">
			<?php echo $this->Form->input('filedescription', array('label' => FALSE)); ?>
			</label>
		</section>
		
		
		
	</fieldset>
		
	<fieldset>
		<section>
			<label class="label">Tags (Comma Separated)</label>
			<label class="input">
			<?php echo $this->Form->input('posttags', array('label' => FALSE)); ?>
			</label>
		</section>
	
	</fieldset>	
	
	<footer>
		<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> POST', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
		<?php echo $this->Form->end(); ?>
	</footer>



