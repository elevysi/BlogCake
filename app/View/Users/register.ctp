 <?php $this->Html->addCrumb($this->Html->tag('li', $this->Html->link('Register', array('controller' => 'users', 'action' => 'register')), array('class' => 'active'))); ?>

<!-- Reg-Form -->
        <?php echo $this->Form->create('User', array('novalidate' => TRUE, 'class' => 'sky-form')); ?>
                        
                            <header>Registration form</header>
                            
                            <fieldset>                  
                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <?php 
				                        	echo $this->Form->input('username', array('placeholder' => 'username', 'type' => 'text', 'label' => FALSE, 'escape' => FALSE, 'autofocus' => 'autofocus', 'div' => FALSE));
									    ?>
                                        <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                                    </label>
                                </section>
                                
                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope"></i>
                                        <?php	echo $this->Form->input('email', array('placeholder' => 'Email Address', 'label' => FALSE, 'div' => FALSE)); ?>
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                    </label>
                                </section>
                                
                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-lock"></i>
                                        <?php echo $this->Form->input('password', array('placeholder' => 'Password', 'type' => 'password', 'label' => FALSE, 'escape' => FALSE, 'div' => FALSE));?>
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                                    </label>
                                </section>
                                
                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-lock"></i>
                                       <?php echo $this->Form->input('password', array('placeholder' => 'Password', 'type' => 'password', 'label' => FALSE, 'escape' => FALSE, 'div' => FALSE));?>
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                                    </label>
                                </section>
                            </fieldset>
                                
                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <?php echo $this->Form->input('first_name', array('placeholder' => 'First Name', 'label' => FALSE, 'div' => FALSE)); ?>
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <?php echo $this->Form->input('last_name', array('placeholder' => 'Last Name', 'div' => FALSE, 'label' => FALSE)); ?>
                                        </label>
                                    </section>
                                </div>
                                
                                <section>
                                    <label class="select">
                                        <select name="gender">
                                            <option value="0" selected disabled>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </section>
                                
                                <section>
                                    <label class="checkbox"><input type="checkbox" name="subscription" id="subscription"><i></i>I want to receive news and  special offers</label>
                                    <label class="checkbox"><input type="checkbox" name="terms" id="terms"><i></i>I agree with the Terms and Conditions</label>
                                </section>
                            </fieldset>
                            <footer>
                            <?php 
	                        	echo $this->Form->button('Register', array('type' => 'submit','class' => "btn-u"));
	                        	echo $this->Form->end();
	                        ?>
                                <?php echo $this->Html->Link('Login', array('controller' => 'users', 'action' => 'login'), array('class' => 'btn-u btn-u-default'));?>
                            </footer>
                        <!-- End Reg-Form -->