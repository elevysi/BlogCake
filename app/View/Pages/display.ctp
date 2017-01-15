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
                            <span class="page-scroll"><a href="http://mean.elevysi.com/" class='btn-u btn-brd btn-brd-hover btn-u-light'>MEAN Stack</a></span>
                            <span class="page-scroll"><a href="#" class='btn-u btn-brd btn-brd-hover btn-u-light'>ASP.NET MVC</a></span>
                        </div>
                    </li>
                    
                    		<!-- SLIDE 2 -->
						<li data-transition="slideup" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
							<!-- MAIN IMAGE -->
							<?php echo $this->Html->image('/img/sliders/profile.jpg', array('alt' => 'slidebg2', 'data-bgfit' => 'cover', 'data-bgposition' => 'center center', 'data-bgrepeat' => 'no-repeat'));?>
							<!-- LAYERS -->
							<div class="tp-caption rs-caption-1 sft start"
							data-x="center"
							data-hoffset="0"
							data-y="100"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
								Sharing is Caring
							</div>
				
						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sft"
						data-x="center"
						data-hoffset="0"
						data-y="200"
						data-speed="1000"
						data-start="2500"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						I share bits of my daily crushes and random pictures, always with a technology perspective.<br>
						Project delivered through the MEAN Stack.
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
					<span class="page-scroll"><a href="http://mean.elevysi.com/" class="btn-u btn-brd btn-brd-hover btn-u-light">La Life</a></span>
				</div>
				</li>             
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
                <div class="tp-dottedoverlay twoxtwo"></div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->