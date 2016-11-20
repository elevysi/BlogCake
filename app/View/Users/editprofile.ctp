
<?php $this->Html->addCrumb($this->Html->tag('li', $this->Html->link('Edit Profile', array('controller' => 'users', 'action' => 'profile')), array('class' => 'active'))); ?>

<?php echo $this->Form->create('User', array('type' => 'file', 'novalidate' => TRUE, 'class' => 'sky-form')); ?>
<header><?php echo __('Edit Profile'); ?></header>
	<fieldset>
	
							 <section>
							 	<label class="label">Username</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <?php 
				                        	echo $this->Form->input('username', array('placeholder' => 'username', 'type' => 'text', 'label' => FALSE, 'escape' => FALSE, 'autofocus' => 'autofocus', 'div' => FALSE));
									    ?>
                                        <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                                    </label>
                                </section>
                                
                                <section>
                                <label class="label">Email</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope"></i>
                                        <?php	echo $this->Form->input('email', array('placeholder' => 'Email Address', 'label' => FALSE, 'div' => FALSE)); ?>
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                    </label>
                                </section>
	
		<section>
			<label class="label">First Name</label>
			<label class="input">
			<?php echo $this->Form->input('first_name', array('label' => FALSE)); ?>
			</label>
		</section>
		
		<section>
			<label class="label">Last Name</label>
			<label class="input">
			<?php echo $this->Form->input('last_name', array('label' => FALSE)); ?>
			</label>
		</section>
		
		<section>
			<label class="select">Gender</label>
				<?php echo $this->Form->input('gender', array('type' => 'select', 'options' => array('M' => 'Male', 'F' => 'Female'))); ?>
                                        <i></i>
            
			
		</section>
		
		<section>
			<label class="label">Description</label>
			<label class="input">
			<?php echo $this->Form->input('description', array('label' => FALSE)); ?>
			</label>
		</section>
		
	</fieldset>
	
	<fieldset>
	
		<section>
			<label class="label">Web site</label>
			<label class="input">
			<?php echo $this->Form->input('website', array('label' => FALSE)); ?>
			</label>
		</section>
	
		<section>
			<label class="label">Embedded</label>
			<label class="input">
			<?php echo $this->Form->input('embedded', array('label' => FALSE)); ?>
			</label>
		</section>
	</fieldset>
	
	
	<fieldset>
	
		<section>
			<label class="label">Upload Avatar</label>
            <label for="file" class="input input-file">
            	<div class="button"><?php echo $this->Form->input('uploadfile', array('type' => 'file','label' => FALSE, 'onchange' => "this.parentNode.nextSibling.value = this.value", 'id' => "file")); ?>Browse</div><input type="text" readonly>
            </label>
            
		</section>
		
		
		
	</fieldset>
		
	<fieldset>
		<section>
			<label class="label">Tags (Comma Separated)</label>
			<label class="input">
			<?php echo $this->Form->input('posttags', array('label' => FALSE)); ?>
			</label>
			
		<?php if(!empty($user['Tag'])):?>
			<?php 
				$j = 0;
				foreach($user['Tag'] as $tag){
					if($j > 0) echo ', ';
					echo '<i class="fa fa-tags"></i>'.$tag['name'];
					$j++;
				}
				
		?>
		<?php endif;?>
		</section>
	
	</fieldset>	
	
	<footer>
		<?php echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> SAVE', array('type' => 'submit', 'class' => 'btn btn-success', 'escape' => FALSE)); ?>
		<?php echo $this->Form->end(); ?>
	</footer>



