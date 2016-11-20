<!-- INTRO - HOMEPAGE
================================================== -->
<section id="home-slider" class="flexslider fullbg" style="background-image:url('/.<?php echo $this->webroot;?>img/churchFun.jpg'); height:600px;padding:0px;">
<ul class="slides">
	<li class="home-slide">
	<div class="flex-caption transparent light-font center">
		<p class="home-slide-content bounceInLeft animated" data-wow-delay="0.5s" data-wow-duration="4s">
			 <?php echo $citations[1]['Citation']['description'];?>
			 
		</p>
		<p class="home-slide-content bounceIn animated" data-wow-delay="2s" data-wow-duration="4s">
			<span class="highlight"><?php echo $citations[1]['Citation']['text'];?></span>
		</p>
	</div>
	</li>
	<li class="home-slide">
	<div class="flex-caption transparent light-font center">
		<p class="home-slide-content bounceInLeft animated" data-wow-delay="0.5s" data-wow-duration="4s">
			 <?php echo $citations[2]['Citation']['description'];?>
			 
		</p>
		<p class="home-slide-content bounceIn animated" data-wow-delay="2s" data-wow-duration="4s">
			<span class="highlight"><?php echo $citations[2]['Citation']['text'];?></span>
		</p>
	</div>
	</li>
	<li class="home-slide">
	<div class="flex-caption transparent light-font center">
		<p class="home-slide-content bounceInLeft animated" data-wow-delay="0.5s" data-wow-duration="4s">
			 <?php echo $citations[3]['Citation']['description'];?>
			 
		</p>
		<p class="home-slide-content bounceIn animated" data-wow-delay="2s" data-wow-duration="4s">
			<span class="highlight"><?php echo $citations[3]['Citation']['text'];?></span>
		</p>
	</div>
	</li>
</ul>
</section>

<!-- ABOUT
================================================== -->

<section id="about" class="graybg" style="border-top:0px;">
<div class="container">
	<div class="starter-template" style="padding-bottom:0px;">
		<h1>Shelter Therapeutique</h1>
		<div class="smallsep">
		</div>
		<p class="lead">
			 Welcome / Wellkomm / Bienvenue.
		</p>
	</div>
	
	<br/><?php echo $this->Html->image('shelter-brown-small.png', array('class' => 'img-responsive pxauto wow bounceIn animatedUp', 'style' => 'margin-bottom:-60px', 'data-wow-delay' => '0.2s'));?>
</div>
</section>


<!-- QUI SOMMES NOUS
================================================== -->
<section id="aboutDiv">
<div class="container">
<div class="starter-template">
	<div class="col-md-12">
		<div class="boxservice wow flipInY animated" data-wow-delay="0.1s">
<!-- 			<i class="fa fa-globe"></i> -->
			
			
			<h3><?php echo $posts[2]['Post']['title'];?></h3>
			<p>
				 <?php echo nl2br($posts[2]['Post']['content']);?>
			</p>
		</div>
		<div class="boxservice wow flipInY animated" data-wow-delay="0.2s">
<!-- 			<i class="fa fa-user"></i> -->
			<h3><?php echo $posts[3]['Post']['title'];?></h3>
			<p>
				 <?php echo nl2br($posts[3]['Post']['content']);?>
			</p>
		</div>
		<div class="boxservice rightb wow flipInY animated" data-wow-delay="0.3s">
<!-- 			<i class="fa fa-dashboard"></i> -->
			<h3><?php echo $posts[4]['Post']['title'];?></h3>
			<p>
				 <?php echo nl2br($posts[4]['Post']['content']);?>
			</p>
		</div>
	</div>
</div>
</div>
</section>

<hr>

<!-- COMMENT TRAVAILLONS
================================================== -->
<section id="workDiv">
<div class="container">
<div class="starter-template">
	<div class="col-md-12">
		<div class="boxservice wow flipInY animated" data-wow-delay="0.1s">
<!-- 			<i class="fa fa-globe"></i> -->
			
			
			<h3><?php echo $posts[5]['Post']['title'];?></h3>
			<p>
				 <?php echo nl2br($posts[5]['Post']['content']);?>
			</p>
		</div>
		<div class="boxservice wow flipInY animated" data-wow-delay="0.2s">
<!-- 			<i class="fa fa-user"></i> -->
			<h3><?php echo $posts[6]['Post']['title'];?></h3>
			<p>
				 <?php echo nl2br($posts[6]['Post']['content']);?>
			</p>
		</div>
		<div class="boxservice rightb wow flipInY animated" data-wow-delay="0.3s">
<!-- 			<i class="fa fa-dashboard"></i> -->
			<h3><?php echo $posts[7]['Post']['title'];?></h3>
			<p>
				 <?php echo nl2br($posts[7]['Post']['content']);?>
			</p>
		</div>
	</div>
	</div>
</div>
</section>

<hr>

<!-- QUI SOMMES NOUS
================================================== -->
<section id="concernedDiv">
<div class="container">
<div class="starter-template">
		<div class="col-md-12">
			<div class="boxservice wow flipInY animated" data-wow-delay="0.1s">
<!-- 				<i class="fa fa-globe"></i> -->
				
				
				<h3><?php echo $posts[8]['Post']['title'];?></h3>
				<p>
					 <?php echo nl2br($posts[8]['Post']['content']);?>
				</p>
			</div>
			<div class="boxservice wow flipInY animated" data-wow-delay="0.2s">
<!-- 				<i class="fa fa-user"></i> -->
				<h3><?php echo $posts[9]['Post']['title'];?></h3>
				<p>
					 <?php echo nl2br($posts[9]['Post']['content']);?>
				</p>
			</div>
			<div class="boxservice rightb wow flipInY animated" data-wow-delay="0.3s">
<!-- 				<i class="fa fa-dashboard"></i> -->
				<h3><?php echo $posts[10]['Post']['title'];?></h3>
				<p>
					 <?php echo nl2br($posts[10]['Post']['content']);?>
				</p>
			</div>
		</div>
		</div>
</div>
</section>

<!-- SERVICES
================================================== -->


<!-- TEAM
================================================== -->
<section id="team" class="maincolorbg">
<div class="container">
	<div class="starter-template">
		<h1>Responsables</h1>
		<div class="smallsep">
		</div>
		<p class="lead">
			Nous contacter / to contact us: <br/>
			Entrevue sur rendez-vous <br/>
			Please make an appointment
		</p>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="thumbnail wow bounceIn animated" data-wow-delay="0.1s" data-wow-duration="2s">
<!-- 				<img src="http://www.wowthemes.net/demo/calypso/img/demo/team1.jpg" alt=""> -->
				<div class="caption">
					<h4><?php echo $responsibles[1]['Responsible']['first_name'].' '.$responsibles[1]['Responsible']['last_name'];?></h4>
					<span class="primarycol">- <?php echo $responsibles[1]['Responsible']['function']; ?> -</span>
					<p>
						 <?php echo $responsibles[1]['Responsible']['address']; ?>
					</p>
					
					<p>
						 <?php echo 'Tel: '.$responsibles[1]['Responsible']['phone']; ?>
					</p>
<!-- 					<ul class="social-icons"> -->
<!-- 						<li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
<!-- 					</ul> -->
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail wow bounceIn animated" data-wow-delay="0.2s" data-wow-duration="2s">
<!-- 				<img src="http://www.wowthemes.net/demo/calypso/img/demo/team2.jpg" alt=""> -->
				<div class="caption">
					<h4><?php echo $responsibles[2]['Responsible']['first_name'].' '.$responsibles[2]['Responsible']['last_name'];?></h4>
					<span class="primarycol">- <?php echo $responsibles[2]['Responsible']['function']; ?> -</span>
					<p>
						 <?php echo $responsibles[2]['Responsible']['address']; ?>
					</p>
					<p>
						 <?php echo 'Tel: '.$responsibles[2]['Responsible']['phone']; ?>
					</p>
<!-- 					<ul class="social-icons"> -->
<!-- 						<li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
<!-- 						<li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
<!-- 					</ul> -->
				</div>
			</div>
		</div>
		
	</div>
</div>
</section>







<!-- CONTACT
================================================== -->
<section id="contact-page" class="maincolorbg">
<div class="container">
	<div class="starter-template">
		<h1>Contact</h1>
		<div class="smallsep">
		</div>
		
		
	</div>
	<form id="contact" name="contact" method="post">
		<fieldset>
			<div class="row">
				<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
					<label for="name" id="name">Nom<span class="required">*</span></label>
					<input type="text" name="name" id="name" size="30" value="" required/>
				</div>
				<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
					<label for="email" id="email">Email<span class="required">*</span></label>
					<input type="text" name="email" id="email" size="30" value="" required/>
				</div>
				<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.5s" data-wow-duration="2s">
					<label for="phone" id="phone">Phone</label>
					<input type="text" name="phone" id="phone" size="30" value=""/>
				</div>
			</div>
			<div class="wow fadeIn animated" data-wow-delay="0.8s" data-wow-duration="1.5" style="margin-top:15px;">
				<label for="Message" id="message">Message<span class="required">*</span></label>
				<textarea name="message" id="message" required></textarea>
			</div>
			<div class="wow fadeIn animated" data-wow-delay="1s" data-wow-duration="2s">
				<input id="submit" type="submit" name="submit" value="Envoyer"/>
			</div>
		</fieldset>
	</form>
	<div id="success">
		<span>		
		<p style="margin-top:20px;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			 Your message was sent succssfully! I will be in touch as soon as I can.
		</p>
		</span>
	</div>
	<div id="error">
		<span>
		<p>
			 Something went wrong, try refreshing and submitting the form again.
		</p>
		</span>
	</div>
</div>
</section>