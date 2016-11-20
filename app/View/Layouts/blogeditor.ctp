<!DOCTYPE html> 
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Elvis | Blog</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="title" content="Add a Post"/>
    <meta name="description" content="Add a Post to www.elevysi.com">
    <meta name="author" content="Elvis Hatungimana">
    <meta name="keywords" content='Blog, elvis, elevysi, computer science, life, style, IT, I.T., develop, program'/>
    
    
    <?php 
  		echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min.css');
  		echo $this->Html->css('/assets/css/style.css');
  		
  		echo $this->Html->css('/assets/plugins/line-icons/line-icons.css');
  		echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome.min.css');
  		echo $this->Html->css('/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css');
  		echo $this->Html->css('/assets/css/pages/blog.css');
  		
  		echo $this->Html->css('/css/pages/feature_timeline1.css');
  		
  		echo $this->Html->css('/assets/css/theme-colors/default.css');
  		
  		echo $this->Html->css('/assets/css/custom.css');
  		
	    
	    
	    echo $this->fetch('meta');
	    echo $this->fetch('css');
	?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

   
</head>	

<body>
<div class="wrapper">
    <?php echo $this->element('Blog/header', array('is_logged' => $is_logged));?> 

    

    <!--=== Content Part ===-->
    <div class="container content blog-page blog-item">
	    <div class="row">
	    	<div class="col-md-3">
	    		<?php 
					$this->start('leftmenu');
						echo $this->element('Blog/leftmenu');
					$this->end('leftmenu');
					echo $this->fetch('leftmenu');
			    ?>
	    	</div>
	    	<div class="col-md-9">
	    		<?php echo $this->Session->flash(); ?>
	    		<?php echo $this->fetch('content'); ?>
	    	</div>
	    </div>
     </div><!--/container-->		
    <!--=== End Content Part ===-->

     <?php echo $this->element('Blog/footer');?>
     
</div><!--/wrapper-->


<?php 

		echo $this->Html->script('/assets/plugins/jquery/jquery.min.js');
		echo $this->Html->script('/assets/plugins/jquery/jquery-migrate.min.js');
		echo $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min.js');
		
		echo $this->Html->script('/assets/plugins/back-to-top.js');
		echo $this->Html->script('/assets/js/custom.js');
		echo $this->Html->script('/assets/js/app.js');
		
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
?>


<script type="text/javascript">

tinymce.init({
    selector: "textarea",
    theme: "modern",
    
    height: 700,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount sh4tinymce visualblocks visualchars code fullscreen",
        "nonbreaking contextmenu directionality",
        "emoticons template paste textcolor",
    ],
    toolbar1: " undo redo | codeElement varElement sh4tinymce | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview | forecolor backcolor emoticons",
   
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
    
});

</script>

<script type="text/javascript">
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