
<?php echo $this->Form->create('Employee', array('action' => 'edit')); ?>
			
	<div class="Employee_Form">
		<fieldset id="Employee_Personal">
			<legend class="legenda">Dados Pessoais</legend>
				
				<?php echo $this->Form->input('Employee.id', array('type' => 'hidden')); ?>
				<?php echo $this->Form->input('Employee.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?>
				<?php echo $this->Form->input('Employee.cpf', array('label' => 'CPF: ', 'id'=>'cpf','div'=>'div_cpf','onblur'=>'checkCPF(this)')); ?>
				<?php echo $this->Form->input('Employee.phone', array('label' => 'Telefone: ', 'id'=>'phone')); ?>
				<?php echo $this->Form->input('Employee.cellphone', array('label' => 'Celular: ', 'id'=>'cellphone')); ?>
				<?php echo $this->Form->input('Employee.email', array('label' => 'E-mail: ','required'=>'required', 'id'=>'email')); ?>					
		</fieldset>

		<fieldset id="Employee_Adress">
			<legend class="legenda">Endereço</legend>

				<?php echo $this->Form->input('Address.id', array('type' => 'hidden')); ?>
				<?php echo $this->Form->input('Address.zip_code', array('label' => 'CEP: ', 'id'=>'zip_code')); ?>
				<?php echo $this->Form->input('Address.number', array('label' => 'Número: ')); ?>
				<?php echo $this->Form->input('Address.address', array('label' => 'Endereço: ', 'id'=>'address')); ?>
				<?php echo $this->Form->input('Address.complement', array('label' => 'Complemento: ')); ?>
				<?php echo $this->Form->input('Address.neighborhood', array('label' => 'Bairro: ','id'=>'neighborhood')); ?>
				<?php echo $this->Form->input('Address.city', array('label' => 'Cidade: ', 'id'=>'city')); ?>
				<?php echo $this->Form->input('Address.state', array('options' => array("AC"=>"AC","AL"=>"AL","AP"=>"AP","AM"=>"AM","BA"=>"BA","CE"=>"CE","DF"=>"DF","ES"=>"ES","GO"=>"GO","MA"=>"MA","MG"=>"MG","MT"=>"MT","MS"=>"MS","PA"=>"PA","PB"=>"PB","PE"=>"PE","PI"=>"PI","PR"=>"PR","RJ"=>"RJ","RN"=>"RN","RO"=>"RO","RR"=>"RR","RS"=>"RS","SC"=>"SC","SE"=>"SE","SP"=>"SP","TO"=>"TO"),'type' => 'select', 'empty' => 'Selecione','label' => 'Estado: ', 'id'=>'state')); ?>
		</fieldset>

	<fieldset id="Employee_Users">
		<legend class="legenda">Usuário</legend>
			<?php echo $this->Form->input('User.id', array('type' => 'hidden')); ?>
			<?php echo $this->Form->input('User.username',array('label' => 'Nome de usuário: <br>', 'required'=>'required','id' => 'campo_usuario')); ?>
			<?php echo $this->Form->input('User.password', array('label' => 'Senha: <br>','required'=>'required', 'id' => 'senha')); ?>
			<?php echo $this->Form->input('User.type', array('label' => 'Tipo de usuário: <br>', 'empty' => 'Selecione','required'=>'required', 'id' => 'tipousuario',
    		'options' => array('waiter' => 'Garçom', 'manager' => 'Gerente', 'cashier' => 'Caixa', 'admin' => 'Admin'))); ?>
	</fieldset>
</div>
	
<?php echo $this->Form->end('Salvar Edição'); ?>