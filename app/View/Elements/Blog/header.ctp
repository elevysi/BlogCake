<!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                    <li>
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="languages">
                            <li class="active">
                                <a href="#">English <i class="fa fa-check"></i></a> 
                            </li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Russian</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>   
                    <li><a href="#">Help</a></li>  
                    <li class="topbar-devider"></li>
                    <?php if($is_logged):?>
                    	<li><?php echo $this->Html->Link('Logout', array('controller' => 'users', 'action' => 'logout'));?></li>
                     <?php else:?>
                    	<li><?php echo $this->Html->Link('Login', array('controller' => 'users', 'action' => 'login'));?></li>
                    <?php endif;?>
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
<!--                     <a class="navbar-brand" href="index.html"> -->
<!--                         <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo"> -->
<!--                     </a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li>
                        	<?php echo $this->Html->Link('Home', array('controller' => 'pages', 'action' => 'home'));?>
                        </li>
                        <!-- End Home -->

                        <!-- Blog -->
                        <li class="active">

                        	<?php echo $this->Html->Link('Blog', array('controller' => 'posts', 'action' => 'timeline'));?>
                        
                        </li>
                        <!-- End Blog -->
                        <?php if($is_logged):?>
                         <li class="dropdown">
                        	<?php echo $this->Html->Link($this->Session->read('Auth.User.first_name'), array('controller' => 'posts', 'action' => 'timeline'));?>
                        	<ul class="dropdown-menu">
                        		<li><?php echo $this->Html->Link('View Profile', array('controller' => 'users', 'action' => 'profile'));?></li>
                        		<li><?php echo $this->Html->Link('Edit Profile', array('controller' => 'users', 'action' => 'editprofile'));?></li>
                        		<li><?php echo $this->Html->Link('Settings', array('controller' => 'users', 'action' => 'settings'));?></li>
                        		<li><?php echo $this->Html->Link('Log Out', array('controller' => 'users', 'action' => 'logout'));?></li>
                        	</ul>
                        </li>
                        <?php endif;?>
                        

                       

                        <!-- Search Block -->
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                                </div>
                            </div>    
                        </li>
                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->  
    
    <!--=== Breadcrumbs ===-->
        
    <div class="breadcrumbs">
        <div class="container">
            
            <ul class="pull-right breadcrumb">
                <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'));?></li>
                <li><?php echo $this->Html->link('Timeline', array('controller' => 'posts', 'action' => 'timeline'));?></li>
                <?php echo $this->Html->getCrumbs(''); ?>
                
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->