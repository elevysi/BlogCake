<?php $this->Html->addCrumb($this->Html->tag('li', $this->Html->link('Profile - '.$user['User']['full_name'], array('controller' => 'users', 'action' => 'profile')), array('class' => 'active'))); ?>
<div class="headline"><h2><?php echo $user['User']['full_name'];?></h2></div>
<div class="row">
	<div class="col-md-4">
		
		<iframe src="<?=$this->Html->url(array('controller' => 'users', 'action' => 'renderavatar', $user['User']['id']));?>"  height="500" width="100%"> </iframe>
<!-- 		<img src="assets/img/clients/cisco.png" class="img-responsive hover-effect" alt="" /> -->
	</div>
	
	<div class="col-md-8">
		<table class="table">
			<tr>
				<th>Name</th>
				<td><?php echo $user['User']['full_name'];?></td>
			</tr>
			<tr>	
				<th>Description</th>
				<td><?php echo $user['User']['description'];?></td>
			</tr>
			<?php if(!empty($user['User']['gender'])):?>
				<tr>	
					<th>Gender</th>
					<td><?php echo $user['User']['gender'] == 'M'? 'Male' : 'Female';?></td>
				</tr>
			<?php endif;?>
		</table>
	</div>

</div>

<hr>
<div class="headline"><h2><?php echo $user['User']['first_name'].' \'s posts';?></h2></div>
<ul class="">
<?php foreach($user['Post'] as $post):?>
<li><?php echo $this->Html->Link($post['title'], array('controller' => 'posts', 'action' => 'viewpost', $post['id']));?></li>
<?php endforeach;?>
</ul>