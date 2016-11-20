<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	
	<?php
		echo $this->Html->meta('icon');
		?>
				
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php 
		
		echo $this->Html->css('default');
		echo $this->Html->css('/bootstrap/css/bootstrap.min');
		
		
		echo $this->Html->script('jquery/jquery-1.11.1.min'); //The Jquery Lib
		echo $this->Html->script('/bootstrap/js/bootstrap.min');
		
		
		
		
		
		echo $this->Html->css('jquery/smoothness/jquery-ui.min'); //CSS file for the layout of the Jquery widgets, MIN is used for MINIMUM load
		
		echo $this->Html->script('jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min'); //The Jquery UI Lib
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
	
	<style>
		body {
		   		padding-top: 70px;
			  padding-bottom: 20px;
			   /* Margin bottom by footer height */
	 		  margin-bottom: 60px;
		}
		
		.navbar {
		  margin-bottom: 20px;
		}
		
		#footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}

		.footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}
	</style>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	
</head>
<body>
	
	
		<div class="container">
		
		
			 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
			 
			 		<div class="container">
			          <div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			           
			          </div>
			          <div class="navbar-collapse collapse">
			            <ul class="nav navbar-nav">
			              <li>
			              	<?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'home')); ?>
			              </li>
			              
			              <li>
			              	<?php echo $this->Html->link(__('Posts'), array('controller' => 'posts', 'action' => 'index')); ?>
			              </li>
			              
			              <li>
			              	<?php echo $this->Html->link(__('Citations'), array('controller' => 'citations', 'action' => 'index')); ?>
			              </li>
			              
			               <li>
			              	<?php echo $this->Html->link(__('Sections'), array('controller' => 'sections', 'action' => 'index')); ?>
			              </li>
			              
			              <li>
			              	<?php echo $this->Html->link(__('Menus'), array('controller' => 'menuItems', 'action' => 'index')); ?>
			              </li>
			              
			              <li>
			              	<?php echo $this->Html->link(__('Responsibles'), array('controller' => 'responsibles', 'action' => 'index')); ?>
			              </li>
			              
			              <li>
			              	<?php echo $this->Html->link(__('Site Variables'), array('controller' => 'siteVariables', 'action' => 'index')); ?>
			              </li>
			              
			              
			             
			              
			             
			            </ul>
			            <ul class="nav navbar-nav navbar-right">
			              <li>
			              	<?php echo $this->Html->link(__('Add User'), array('controller' => 'users', 'action' => 'register')); ?>
			              </li>
			              
			              <li>
			             	<?php echo $this->Html->link(__('Logout ( '.$this->Session->read('Auth.User.username').' )'), array('controller' => 'users', 'action' => 'logout')); ?>
			              </li>
			            </ul>
			          </div><!--/.nav-collapse -->
			        </div><!--/.container-fluid -->
			 
			 </div>
		
		<div class="row">
				<ul class="breadcrumb">
			  		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'home')); ?></li>
			  		<?php echo $this->Html->getCrumbs(''); ?>
				</ul>
		</div>
		
		<div class="row" style="padding-left:20px; padding-right:20px;">
			<?php echo $this->Session->flash(); ?>			

			<?php echo $this->fetch('content'); ?>
			
		</div>
			
			
		</div>
		
<script type="text/javascript">

tinymce.init({
    selector: "textarea",
    theme: "modern",
    
    height: 300,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "nonbreaking contextmenu directionality",
        "emoticons template paste textcolor"
    ],
    toolbar1: " undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview | forecolor backcolor emoticons",
   
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
    
});

</script>		
	
	
	<?php echo $this->Js->writeBuffer(); ?>
	
</body>
</html>
