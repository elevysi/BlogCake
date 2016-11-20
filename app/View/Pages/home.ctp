<!-- INTRO - HOMEPAGE
================================================== -->
<section id="home-slider" class="flexslider fullbg" style="background-image:url('/.<?php echo $this->webroot;?>img/shelterLogoBack.jpg'); height:600px;padding:0px;">
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
		<h1><?php echo $variables['page_title'];?></h1>
		<div class="smallsep">
		</div>
		<p class="lead">
			 <?php echo $variables['welcome_title'];?>
		</p>
	</div>
	
</div>
</section>


<!-- QUI SOMMES NOUS
================================================== -->

<?php foreach($sections as $section):?>

<section id="<?php echo $section['Section']['section_identifier']; ?>" class="<?php echo $section['Section']['section_class']; ?>">
<div class="container">
<div class="starter-template">
	
	
	<?php if($section['Section']['section_identifier'] == 'team'):?>
	
		<h1><?php echo $variables['responsabe_title'];?></h1>
		<div class="smallsep">
		</div>
		<p class="lead">
			<?php echo $variables['responsable_description'];?>
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

				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail wow bounceIn animated" data-wow-delay="0.2s" data-wow-duration="2s">
				<div class="caption">
					<h4><?php echo $responsibles[2]['Responsible']['first_name'].' '.$responsibles[2]['Responsible']['last_name'];?></h4>
					<span class="primarycol">- <?php echo $responsibles[2]['Responsible']['function']; ?> -</span>
					<p>
						 <?php echo $responsibles[2]['Responsible']['address']; ?>
					</p>
					<p>
						 <?php echo 'Tel: '.$responsibles[2]['Responsible']['phone']; ?>
					</p>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<?php elseif($section['Section']['section_identifier'] == 'contact-page'): ?>
	
	<h1><?php echo $variables['contact_title'];?></h1>
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
	
	<?php else:?>
		<div class="col-md-12">
			<?php foreach($section['Post'] as $post):?>
				<div class="boxservice wow flipInY animated" data-wow-delay="0.1s">
					<h3><?php echo $post['title'];?></h3>
					<p>
						 <?php echo nl2br($post['content']);?>
					</p>
				</div>
			<?php endforeach;?>
		</div>
	
	<hr>
	<?php endif;?>
	
	
	
	
</div>
</div>
</section>

<?php endforeach;?>


