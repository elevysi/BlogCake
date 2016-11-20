
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
		echo $this->Html->css('bootstrap/carousel');
		
		echo $this->Html->css('jquery/smoothness/jquery-ui.min'); //CSS file for the layout of the Jquery widgets, MIN is used for MINIMUM load
		
		echo $this->Html->script('jquery/jquery-1.11.1.min'); //The Jquery Lib
		echo $this->Html->script('jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min'); //The Jquery UI Lib
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
		
		echo $this->Html->script('bootstrap/bootstrap');
		echo $this->Html->script('bootstrap/docs');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
	
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
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
             
                <li class="active"><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'))?></li>
                <li><?php echo $this->Html->link('About me', array('controller' => 'pages', 'action' => 'aboutme'))?></li>
                
                <?php  if($this->Session->read('Auth.User.id')): ?>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.first_name')?> <b class="caret"></b></a>
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
                <li><?php echo $this->Html->link('Contact', array('controller' => 'pages', 'action' => 'contact'))?></li>
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
            </div>
          </div>
        </div>

      </div>
    </div>
    
    
	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php 
        	echo $this->Html->image('slider/trustpro.jpg', array('alt' => 'First Display Image'));
       	 ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to Elvis Website.</h1>
              <p class="lead">
              	I created this website to keep in touch with anybody who wishes too, and to publish blogs and tips here and there. Join me! 
              </p>
              <?php echo $this->Html->Link('Sign up today', array('controller' => 'users', 'action' => 'register'), array( 'class' => 'btn btn-large btn-primary'));?>
              
            </div>
          </div>
        </div>
        <div class="item">
          <?php 
        	echo $this->Html->image('slider/change.jpg', array('alt' => 'First Display Image'));
       	 ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Change the game.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <?php 
        	echo $this->Html->image('slider/music.jpg', array('alt' => 'First Display Image'));
       	 ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
	
	<?php 
// 		echo $this->Session->flash();
		echo $this->fetch('content');
	?>
    



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

    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
