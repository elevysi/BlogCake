<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Elvis</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="title" content="elevysi.com"/>
    <meta name="description" content="Home Page elevysi.com">
    <meta name="author" content="Elvis Hatungimana">
    <meta name="keywords" content="elevysi, blog, information, IT, developer, computer, programmer, job"/>
    
    
    <?php 
  		echo $this->Html->css('/onepage/assets/plugins/bootstrap/css/bootstrap.min.css');
  		echo $this->Html->css('/onepage/assets/css/one.style.css');
  		
  		echo $this->Html->css('/onepage/assets/plugins/line-icons/line-icons.css');
  		echo $this->Html->css('/onepage/assets/plugins/font-awesome/css/font-awesome.min.css');
  		echo $this->Html->css('/onepage/assets/plugins/pace/pace-flash.css');
  		echo $this->Html->css('/onepage/assets/plugins/owl-carousel/owl.carousel.css');
  		echo $this->Html->css('/onepage/assets/plugins/revolution-slider/css/settings.css', array('type' => 'text/css', 'media' => 'screen'));
  		
  		echo $this->Html->css('/onepage/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css');
  		echo $this->Html->css('/onepage/assets/plugins/cube-portfolio/templates/lightbox-gallery/css/main.css');
  		
  		echo $this->Html->css('/onepage/assets/css/theme-colors/default.css');
  		echo $this->Html->css('/onepage/assets/css/custom.css');
	    
	    
	    echo $this->fetch('meta');
	    echo $this->fetch('css');
	?>
    
    

    
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->
    
</head>

<!-- 
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" class="demo-lightbox-gallery">
    <!--=== Header ===-->    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#intro">
                    <span>E</span>lvis
                    <!-- <img src="assets/img/logo1.png" alt="Logo"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                   
                    
                    <li class="page-scroll">
                        <?php echo $this->Html->Link('Blog - CakePHP', array('controller' => 'posts', 'action' => 'timeline')); ?>
                    </li>
                    
                    <li class="page-scroll">
                    <a href="http://spring.elevysi.com">Blog Spring</a>
                    </li>

                   
                    <?php if($is_logged):?>
		              <li>
		              	<?php echo $this->Html->link(__('Admin'), array('controller' => 'posts', 'action' => 'index')); ?>
		              </li>
	             <?php endif;?>
                                       
<!--                     <li class="page-scroll"> -->
<!--                         <a href="../index.html">Main</a> -->
<!--                     </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->    

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="fullscreenbanner-container">
            <div class="fullscreenbanner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <?php echo $this->Html->image('/img/sliders/bg2.jpg', array('alt' => 'slidebg1', 'data-bgfit' => 'cover', 'data-bgposition' => 'center center', 'data-bgrepeat' => 'no-repeat'));?>
<!--                         <img src="assets/img/sliders/revolution/bg1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->

                        <!-- LAYERS -->
                        <div class="tp-caption rs-caption-1 sft start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="100"
                            data-speed="800"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            Elvis Hatungimana
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-2 sft"
                            data-x="center"
                            data-hoffset="0"
                            data-y="200"
                            data-speed="1000"
                            data-start="3000"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            Passionate developper
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption rs-caption-3 sft"
                            data-x="center"
                            data-hoffset="0"
                            data-y="360"
                            data-speed="800"
                            data-start="3500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">
                            <span class="page-scroll"><a href="http://spring.elevysi.com/public/cv" class='btn-u btn-brd btn-brd-hover btn-u-light'>CV</a></span>
                             <span class="page-scroll"><?php echo $this->Html->Link('CakePHP', array('controller' => 'posts', 'action' => 'timeline') , array('class' => 'btn-u btn-brd btn-brd-hover btn-u-light')); ?></span>
                            <span class="page-scroll"><a href="http://spring.elevysi.com/" class='btn-u btn-brd btn-brd-hover btn-u-light'>Spring MVC</a></span>
                            <span class="page-scroll"><a href="http://spring.elevysi.com/" class='btn-u btn-brd btn-brd-hover btn-u-light'>Current Blog</a></span>
                            <span class="page-scroll"><a href="#" class='btn-u btn-brd btn-brd-hover btn-u-light'>NodeJS</a></span>
                            <span class="page-scroll"><a href="#" class='btn-u btn-brd btn-brd-hover btn-u-light'>ASP.NET MVC</a></span>
                        </div>
                    </li>                 
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
                <div class="tp-dottedoverlay twoxtwo"></div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    

    

    

     <!--=== Profile ===-->
    <div>  
    </div>		
    <!--=== End Profile ===-->
    
    
    <?php 

		echo $this->Html->script('/onepage/assets/plugins/jquery-1.11.1.min.js');
		echo $this->Html->script('/onepage/assets/plugins/jquery-migrate-1.2.1.min.js');
		echo $this->Html->script('/onepage/assets/plugins/bootstrap/js/bootstrap.min.js');
		
		echo $this->Html->script('/onepage/assets/plugins/jquery.easing.min.js');
		echo $this->Html->script('/onepage/assets/plugins/pace/pace.min.js');
		echo $this->Html->script('/onepage/assets/plugins/jquery.parallax.js');
		echo $this->Html->script('/onepage/assets/plugins/counter/waypoints.min.js');
		echo $this->Html->script('/onepage/assets/plugins/counter/jquery.counterup.min.js');
		echo $this->Html->script('/onepage/assets/plugins/owl-carousel/owl.carousel.js');
		echo $this->Html->script('/onepage/assets/plugins/revolution-slider/js/jquery.themepunch.tools.min.js');
		echo $this->Html->script('/onepage/assets/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js');
		echo $this->Html->script('/onepage/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js');
		echo $this->Html->script('/onepage/assets/plugins/cube-portfolio/templates/lightbox-gallery/js/main.js');
		echo $this->Html->script('/onepage/assets/js/one.app.js');
		echo $this->Html->script('/onepage/assets/js/plugins/pace-loader.js');
		echo $this->Html->script('/onepage/assets/js/plugins/owl-carousel.js');
		echo $this->Html->script('/onepage/assets/js/plugins/style-switcher.js');
		echo $this->Html->script('/onepage/assets/js/plugins/revolution-slider.js');
		
	
	?>

    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();            
            RevolutionSlider.initRSfullScreen();
        });
    </script>
    <!--[if lt IE 9]>
        <script src="assets/plugins/respond.js"></script>
        <script src="assets/plugins/html5shiv.js"></script>
    <![endif]-->    
</body>
</html>