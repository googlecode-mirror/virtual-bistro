<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
		<title><?php echo $title_for_layout; ?></title>
        <meta http-equiv="Content-Type" content="text/html" "charset"="UTF-8" />
        <?php echo $this->Html->css('reset'); ?>
        <?php echo $this->Html->css('bistro-style'); ?>	
        <?php echo $this->Html->script('validacoes'); ?>
		<?php echo $this->Html->script('buscacep'); ?>
    </head>
<body>
	<header>
		<img src="./img/logo.png" id='logoHeader'>
		
		<div class='menuLateral'>
			<?php echo '<div id="botaoHome">';	
			echo $this->Html->link("Home", array('action' => '../home/'),array('class'=>'botao'));
			echo '</div>'
			?>

			<?php echo '<div id="botaoCadastrar">';	
			echo $this->Html->link("Cadastrar", array('action' => 'add'),array('class'=>'botao'));
			echo '</div>'
			?>
			
			<?php echo '<div id="botaoSair">';	
			echo $this->Html->link('Logout', array('action' =>'../users/logout'));
			echo '</div>';
			?>
		
		</div>
	</header>

	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>

</body>
</html>