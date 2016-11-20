<style>
form div{
    padding : 0em;
}
</style>

<?php echo $this->Form->create('User', array('class' => 'form-group form-signin')); ?>
<?php $howTo = " Enter your university email username in the username field and your university email password in the password field."; ?>
    <fieldset>
        <legend><?php echo (__("SIGN IN <button type=\"button\" class=\"btn btn-default btn-xs tip\" data-toggle=\"tooltip\" data-placement=\"right\" title=\" " .$howTo. "\">?</button>")); ?></legend>

        

        
    <?php
        echo $this->Form->input('username', array('placeholder' => 'username', 'type' => 'text', 'label' => 'Username <button type="button" class="btn btn-default btn-xs tip" data-toggle="tooltip" data-placement="right" title="Use your UNI email username; e.g: yourfirstname.yourlastname">?</button>', 'class' => "form-control", 'escape' => FALSE, 'autofocus' => 'autofocus'));
        echo $this->Form->input('password', array('placeholder' => 'Password', 'type' => 'password', 'label' => 'Password <button type="button" class="btn btn-default btn-xs tip" data-toggle="tooltip" data-placement="right" title="Use your UNI email password.">?</button>','class' => "form-control", 'escape' => FALSE));
        /*echo $this->Form->input('localadm', array('type' => 'checkbox', 'label' => 'Local user?'));*/
    ?>
    </fieldset>
<?php echo $this->Form->button('SIGN IN', array('class' => "btn btn-lg btn-primary btn-block")); ?>
    
<script>
    $(function(){
        $(".tip").tooltip();
    });
</script>