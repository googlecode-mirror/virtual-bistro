<?php 
    foreach ($clients as $client) {        
        $list_clients[$project['clients']['id']] =$project['clients']['name'];
        };                    
    if (!isset($list_projects)){
		$list_clients['none'] = 'Nenhum Cliente Cadastrado';
    }
?>

<?php echo $this->Form->create('Table', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Table_Detail">
		<b>Mesa</b><br><br>

			<?php echo $this->Form->input('table.id',array('label' => 'Número da Mesa: <br>', 'required'=>'required','id' => 'id_mesa')); ?>
			<?php echo $this->Form->input('table.stats', array('label' => 'Status: <br>', 'empty' => 'Selecione','required'=>'required', 'id' => 'tablestats',
    		'options' => array('free' => 'Livre', 'attending' => 'Em Atendimento', 'reserved' => 'Reservada'))); ?>

			<?php //echo $this->Form->input('Table.client_id', array('label' => 'Cliente: <br>','required'=>'required', 'id' => 'table_client')); ?>
			?>
			<?php echo $this->Form->input('Table.client_id', array('options' => $list_clients,'empty' => 'Selecione', 'type'=>'select','label' => 'Cliente: ', 'id'=>'clientID','required'=>'required')); ?>

			<?php echo $this->Form->input('Table.value', array('label' => 'Valor: <br>','required'=>'required', 'id' => 'value')); ?>
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>