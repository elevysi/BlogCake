<?php echo $this->element('Functions/useful');?>

<div class="shadow-wrapper margin-bottom-60">
                    <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                        <h2>Welcome to the Blog Timeline</h2>
                        <p>Browse through the posts; click on the post for more information.</p>
                    </div>
                </div>

                <!-- Small Default Content Boxes -->
                <div class="row content-boxes-v1 margin-bottom-30">
                	<div class="col-md-4">
                        <h2 class="heading-sm">
                            <i class="icon-custom icon-sm icon-bg-green icon-line icon-pencil"></i>
                            <span>New Post</span>
                        </h2>
                        <p>Click on the button below to write a new Post (for community members only)</p>
                        <?php echo $this->Html->Link('<i class="fa fa-pencil"></i> NEW POST', array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn-u btn-u-green', 'escape' => FALSE)); ?>
                    </div>
                    
                    <div class="col-md-4 md-margin-bottom-30">                
                        <h2 class="heading-sm">
                            <i class="icon-custom icon-sm icon-bg-red fa fa-lightbulb-o"></i>
                            <span>Register</span>
                        </h2>
                        <p>You can join the community by registering on the Website</p>
                         <?php if(!$is_logged){
                         	echo $this->Html->Link('<i class="fa fa-user"></i> LOGIN', array('controller' => 'users', 'action' => 'login'), array('class' => 'btn-u btn-u-red', 'escape' => FALSE)).' OR '.
                         	$this->Html->Link('<i class="fa fa-user"></i> REGISTER', array('controller' => 'users', 'action' => 'register'), array('class' => 'btn-u btn-u-red', 'escape' => FALSE)); 
                         }?>
                    </div>
                    <div class="col-md-4 md-margin-bottom-30">
                        <h2 class="heading-sm">
                            <i class="icon-custom icon-sm icon-bg-blue fa fa-bullhorn"></i>
                            <span>Facebook</span>
                        </h2>
                        <p>You can use Facebook to join the local community.</p>
                        <?php if(!$is_logged) echo $this->Form->postLink('<i class="fa fa-user"></i> LOGIN', array('controller' => 'auth', 'action' => 'facebook'), array('class' => 'btn-u btn-u-blue', 'escape' => FALSE)); ?>
                    </div>
                    
                </div>
                <!-- End Small Default Content Boxes -->
                            
                        
<ul class="timeline-v1">

		<?php
			$i = 1; 
			foreach ($posts as $post):
			if($i %2 == 0) $timeline_class = 'timeline-inverted';
			else $timeline_class = '';
		?>
		<li class=<?php echo $timeline_class;?>>
		
					<div class="timeline-badge primary"><i class="glyphicon glyphicon-record"></i></div>
		                <div class="timeline-panel">
		                    <div class="timeline-heading">
		                        
		                        <?php if(!empty($post['PostImage']['id'])): ?>
			            	
		                		<?php elseif(!empty($post['PostVideo']['id'])): ?>
		                		<div class="responsive-video"><?php echo $post['PostVideo']['embedded'];?></div>
		                		<?php elseif(!empty($post['PostAudio']['id'])): ?>
			                
		            			<?php endif;?>
		                    </div>
		                    <div class="timeline-body text-justify">
		                        <h2><?php echo $this->Html->Link($post['Post']['title'], array('controller' => 'posts', 'action' => 'viewpost', $post['Post']['id']));?></h2>
		                        <p><?php echo truncate_html($post['Post']['content'], 200); ?></p>
		                        <?php echo $this->Html->Link('Read More', array('controller' => 'posts', 'action' => 'viewpost', $post['Post']['id']), array('class' => 'btn-u btn-u-sm'));?>
		                    </div>
		                    <div class="timeline-footer">
		                        <ul class="list-unstyled list-inline blog-info">
		                            <li><i class="fa fa-clock-o"></i> <?php echo strftime("%d %B %Y", strtotime($post['Post']['created'])); ?></li>
		                            <li><i class="fa fa-comments-o"></i> <?php echo $this->Html->Link('Comments', array('controller' => 'posts', 'action' => 'viewpost', $post['Post']['id'], "#" => "disqus_thread")); ?></li>
		                        </ul>
<!-- 		                        <a class="likes" href="#"><i class="fa fa-heart"></i>239</a> -->
		                    </div>
		                </div>
		
		</li>
		<?php $i++; endforeach;?>
		<li class="clearfix" style="float: none;"></li>
</ul>

<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'elevysicom'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = '//' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>
        
        