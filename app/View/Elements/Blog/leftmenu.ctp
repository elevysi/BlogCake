<ul class="list-group sidebar-nav-v1" id="sidebar-nav">
	<li class="list-group-item"><?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> Timeline', array('controller' => 'posts','action' => 'timeline'), array('escape' => FALSE)); ?></li>
	<li class="list-group-item"><?php echo $this->Html->link('<span class="glyphicon glyphicon-home"></span> Home', array('controller' => 'pages', 'action' => 'home'), array('escape' => FALSE)); ?> </li>
	<li class="list-group-item"><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> View Profile', array('controller' => 'users', 'action' => 'profile'), array('escape' => FALSE)); ?> </li>
	<li class="list-group-item"><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Edit Profile', array('controller' => 'users', 'action' => 'editprofile'), array('escape' => FALSE)); ?> </li>
	
</ul>