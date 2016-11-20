
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Social IT Programming Lifestyle Blog Sports Basketball">
    <meta name="Elvis Hatungimana" content="Friends Profile Messages Dream Meet">

    <title><?php echo $title_for_layout; ?></title>

    <!-- Bootstrap core CSS -->
    <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap/bootstrap.min');
		echo $this->Html->css('bootstrap/navbar');
		
		echo $this->Html->css('jquery/smoothness/jquery-ui.min'); //CSS file for the layout of the Jquery widgets, MIN is used for MINIMUM load
		
		echo $this->Html->script('jquery/jquery-1.11.1.min'); //The Jquery Lib
		echo $this->Html->script('jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min'); //The Jquery UI Lib
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
		
		echo $this->Html->script('bootstrap/bootstrap');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
    
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="#">elevysi.com</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'))?></li>
              <li  class="active"><?php echo $this->Html->link('Posts', array('controller' => 'posts', 'action' => 'index'))?></li>
              <li><?php echo $this->Html->link('About me', array('controller' => 'pages', 'action' => 'aboutme'))?></li>
              <li><?php echo $this->Html->link('Contact', array('controller' => 'pages', 'action' => 'contact'))?></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php  if($this->Session->read('Auth.User.id')): ?>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.first_name');?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
	                    <li><a href="#">Posts</a></li>
	                    <li><a href="#">Profile</a></li>
	                    <li><a href="#">Messages</a></li>
	                    <li class="divider"></li>
	                    <li class="dropdown-header">Nav header</li>
	                    <li><a href="#">Parameters</a></li>
	                    <li><a href="#">Friends</a></li>
                  </ul>
                </li>
                <?php endif;?>
              <?php  if($this->Session->read('Auth.User.id')): ?>
					<li>
						<?php echo $this->Html->Link('Sign Out', array('controller' => 'users', 'action' => 'logout'));?>
					</li>
					<?php else: ?>
					<li>
						<?php echo $this->Html->Link('Sign In', array('controller' => 'users', 'action' => 'login'));?>
					</li>
				<?php endif; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	
      <!-- Main component for a primary marketing message or call to action -->
      		<?php echo $this->Session->flash(); ?>
	          <?php  echo $this->fetch('content'); ?>
	          <?php  echo $this->fetch('actions_left'); ?>
	       </div>

      
    </div> <!-- /container -->


  	
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
    
	    echo $this->Html->script('bootstrap/bootstrap-transition.js');
	    echo $this->Html->script('bootstrap/bootstrap-alert.js');
	    echo $this->Html->script('bootstrap/bootstrap-modal.js');
	    echo $this->Html->script('bootstrap/bootstrap-dropdown.js');
	    echo $this->Html->script('bootstrap/bootstrap-scrollspy.js');
	    echo $this->Html->script('bootstrap/bootstrap-tab.js');
	    echo $this->Html->script('bootstrap/bootstrap-tooltip.js');
	    echo $this->Html->script('bootstrap/bootstrap-popover.js');
	    echo $this->Html->script('bootstrap/bootstrap-button.js');
	    echo $this->Html->script('bootstrap/bootstrap-collapse.js');
	    echo $this->Html->script('bootstrap/bootstrap-carousel.js');
	    echo $this->Html->script('bootstrap/bootstrap-typeahead.js');
	     
	    echo $this->Html->script('bootstrap/holder.js');
	     
	   	
	   	 echo $this->fetch('script');
   ?>
   
  </body>
</html>
