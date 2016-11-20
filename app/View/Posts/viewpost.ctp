 <?php $this->Html->addCrumb($this->Html->tag('li', $this->Html->link(' Post - '.$post['Post']['id'], array('controller' => 'posts', 'action' => 'viewpost', $post['Post']['id']), array('class' => 'active')))); ?>
        <!--Blog Post-->        
    	<div class="blog margin-bottom-40">
            <div class="blog-img">
            
            	<?php if(!empty($post['PostImage']['id'])): ?>
	            	<div class="row margin-bottom-50">
	<!--                     <div class="col-md-6 shadow-wrapper md-margin-bottom-40"> -->
	<!--                         <div class="box-shadow shadow-effect-2"> -->
	<!--                             <img class="img-responsive" src="assets/img/main/3.jpg" alt=""> -->
	<!--                         </div> -->
	<!--                     </div> -->
	                    <div class="col-md-6 shadow-wrapper">
	                        <div class="box-shadow shadow-effect-2">
	<!--                             <img class="img-responsive img-bordered" src="assets/img/main/3.jpg" alt=""> -->
	                            <?php echo $this->Html->image('BeatsAndSennheiser.jpg', array('height' => 500, 'class' => 'img-responsive img-bordered')); ?>
	                        </div>
	                    </div>
	                </div>
                <?php elseif(!empty($post['PostVideo']['id'])): ?>
                	
		                <div class="responsive-video margin-bottom-30">
		                	
		                	<?php  echo $post['PostVideo']['embedded']; ?>
		                </div>
		            
                
                <?php elseif(!empty($post['PostAudio']['id'])): ?>
	                <div class="row margin-bottom-20">
	                    <div class="col-md-6 md-margin-bottom-20"> 
	                        <iframe width="100%" height="305" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/82304720&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
	                    </div>                    
	                    <div class="col-md-6"> 
	                        <iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/19048953&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
	                        
	                        <div class="md-margin-bottom-20"></div><!--space for mobile view-->
	
	                        <iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/78441806&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
	                    </div>                    
	                </div>
            	<?php endif;?>
            			
            
               
            </div>
        	<h2><?php echo $post['Post']['title']; ?></h2>
            <div class="blog-post-tags">
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="fa fa-calendar"></i> <?php echo strftime("%d %B %Y", strtotime($post['Post']['created'])); ?></li>
                    <li><i class="fa fa-pencil"></i> <?php echo $post['Author']['full_name']; ?></li>
                    <li></i> 
                    	<?php 
                    		$j = 0;
                    		foreach ($post['Tag'] as $tag){
								if($j > 0) echo ', ';
								echo '<i class="fa fa-tags"></i>'.$tag['name'];
								$j++;
							}
                    	?>
                    </li>
                </ul>                    
            </div>
            <p>
            <?php echo $post['Post']['content']; ?>
            </p>
        <!--End Blog Post-->        

        <hr>
        </div>

       
   