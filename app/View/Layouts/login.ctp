<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Elevysi | Login </title>

    <!-- Meta -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="title" content="Elevysi Login"/>
    <meta name="description" content="Login Form for elevysi.com">
    <meta name="author" content="Elvis Hatungimana">
    <meta name="keywords" content="elevysi, login, form, user"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    
    
    <?php 
  		echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min.css');
  		echo $this->Html->css('/assets/css/style.css');
  		
  		echo $this->Html->css('/assets/plugins/line-icons/line-icons.css');
  		echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome.min.css');
  		echo $this->Html->css('/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css');
  		
  		echo $this->Html->css('/assets/css/theme-colors/default.css');
  		
  		echo $this->Html->css('/assets/css/custom.css');
	    
	    
	    echo $this->fetch('meta');
	    echo $this->fetch('css');
	?>

   
</head> 

<body>
<div class="wrapper">
<?php echo $this->element('Blog/header', array('is_logged' => $is_logged));?>

    

    <!--=== Content Part ===-->
    <div class="container content">		
    	<?php echo $this->Session->flash(); ?>			

		<?php echo $this->fetch('content'); ?>
    </div><!--/container-->		
    <!--=== End Content Part ===-->

     <!--=== Footer Version 1 ===-->
    <?php echo $this->element('Blog/footer');?>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<?php 

		echo $this->Html->script('/assets/plugins/jquery/jquery.min.js');
		echo $this->Html->script('/assets/plugins/jquery/jquery-migrate.min.js');
		echo $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min.js');
		
		echo $this->Html->script('/assets/plugins/back-to-top.js');
		echo $this->Html->script('/assets/js/custom.js');
		echo $this->Html->script('/assets/js/app.js');
		
		
	
?>


    jQuery(document).ready(function() {
        App.init();      
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 