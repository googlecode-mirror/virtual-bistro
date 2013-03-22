
<h1>Editar Item</h1>
<?php echo $this->Form->create('Menu', array('action' => 'edit')); ?>
			
<div class="Menu_Form">
	<fieldset id="Menu_Detail">
		<legend class="legenda">Detalhamento</legend>

			<?php echo $this->Form->input('Menu.id', array('type' => 'hidden')); ?>
			<?php echo $this->Form->input('Menu.name', array('label' => 'Nome: <br>','required'=>'required', 'id' => 'nome')); ?>
			<?php echo $this->Form->input('Menu.description',array('label' => 'Descrição: <br>', 'required'=>'required','id' => 'descricao')); ?>
			<?php echo $this->Form->input('Menu.image', array('label' => 'Imagem: <br>','required'=>'required', 'id' => 'image')); ?>
			<?php echo $this->Form->input('Menu.price', array('label' => 'Preço: <br>','required'=>'required', 'id' => 'preco')); ?>
			<?php echo $this->Form->input('Menu.type', array('label' => 'Tipo do item: <br>', 'empty' => 'Selecione','required'=>'required', 'id' => 'tipoitem',	'options' => array('appertizes' => 'Petiscos', 'salads' => 'Saladas', 'entrees' => 'Entradas',  'desserts' => 'Sobremesas', 'beverages' => 'Bebidas'))); ?>
	</fieldset>
</div>

	
<?php echo $this->Form->end('Salvar Edição'); ?>