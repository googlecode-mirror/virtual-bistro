
<h1>Cadastrar Mesa</h1>
<?php echo $this->Form->create('Table', array('action' => 'add')); ?>

<div class="Table_Form">
	<fieldset id="Table_Detail">
		<legend class="legenda">Mesa</legend>

			<?php echo $this->Form->input('Table.id',array('label' => 'Número da Mesa: <br>', 'required'=>'required','id' => 'id_mesa')); ?>
			<?php echo $this->Form->input('Table.stats', array('label' => 'Status: <br>', 'empty' => 'Selecione','required'=>'required', 'id' => 'tablestats',
    		'options' => array('free' => 'Livre', 'attending' => 'Em Atendimento', 'reserved' => 'Reservada'))); ?>
			<?php echo $this->Form->input('Table.client_id', array('label' => 'Cliente: <br>','required'=>'required', 'id' => 'table_client')); ?>
			<?php echo $this->Form->input('Table.value', array('label' => 'Valor: <br>','required'=>'required', 'id' => 'value')); ?>
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>