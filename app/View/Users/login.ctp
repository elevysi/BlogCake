 <?php $this->Html->addCrumb($this->Html->tag('li', $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')), array('class' => 'active'))); ?>

 <!-- Login-Form -->
 <div class="row">
                    <div class="col-md-6">
                    <?php echo $this->Form->create('User', array('novalidate' => TRUE, 'class' => 'reg-page sky-form')); ?>
<!--                         <form action="" id="sky-form1" class=""> -->
                            <header>Login form</header>
                            
                            <fieldset>                  
                                <section>
                                    <div class="row">
                                        <label class="label col col-4">E-mail</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-user"></i>
                                                <?php echo $this->Form->input('username', array('placeholder' => 'username', 'type' => 'text', 'label' => FALSE, 'escape' => FALSE, 'autofocus' => 'autofocus', 'div' => FALSE));  ?>
                                            </label>
                                        </div>
                                    </div>
                                </section>
                                
                                <section>
                                    <div class="row">
                                        <label class="label col col-4">Password</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-lock"></i>
                                                <?php echo $this->Form->input('password', array('placeholder' => 'Password', 'type' => 'password', 'label' => FALSE,'class' => "form-control", 'escape' => FALSE, 'div' => FALSE));?>
                                            </label>
                                            <div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>
                                        </div>
                                    </div>
                                </section>
                                
                                <section>
                                    <div class="row">
                                        <div class="col col-4"></div>
                                        <div class="col col-8">
                                            <label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
                                        </div>
                                    </div>
                                </section>
                            </fieldset>
                            <footer>
                                <?php echo $this->Form->button('Login', array('type' => 'submit','class' => "btn-u")); ?>
                                <?php echo $this->Html->Link('Register', array('controller' => 'users', 'action' => 'register'), array('class' => 'btn-u btn-u-default'));?>
                            </footer>
                        </form>         
                        
                        
                    </div>
                    <!-- End Login-Form -->
                </div><!--/end row-->