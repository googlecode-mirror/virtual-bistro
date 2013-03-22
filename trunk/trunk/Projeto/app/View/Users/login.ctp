
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <h2>
    	<img src="./img/logo.png" alt='logo' id='logoLogin'>
    </h2>
        <?php echo $this->Form->input('username',array('class'=>'text-field', 'placeholder'=>'Login', 'id'=>'campoLogin'));
        echo $this->Form->input('password',array('class'=>'text-field', 'placeholder'=>'Senha', 'id'=>'campoSenha'));
    ?>
<?php echo $this->Form->end(__('Login'));?>
</div>