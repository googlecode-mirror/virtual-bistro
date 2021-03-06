
<h1>Cadastrar Cliente</h1>
<?php echo $this->Form->create('Client', array('action' => 'add')); ?>

<div class="Client_Form">
	<fieldset id="Client_Personal">
		<legend class="legenda">Dados Pessoais</legend>
			
			<?php echo $this->Form->input('Client.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?>
			<?php echo $this->Form->input('Client.cpf', array('label' => 'CPF: ', 'id'=>'cpf','div'=>'div_cpf','onblur'=>'checkCPF(this)')); ?>
			<?php echo $this->Form->input('Client.phone', array('label' => 'Telefone: ', 'id'=>'phone')); ?>
			<?php echo $this->Form->input('Client.cellphone', array('label' => 'Celular: ', 'id'=>'cellphone')); ?>
			<?php echo $this->Form->input('Client.email', array('label' => 'E-mail: ','required'=>'required', 'id'=>'email')); ?>					
	</fieldset>
</div>

<div class="Client_Form">
	<fieldset id="Client_Adress">
		<legend class="legenda">Endereço</legend>

			<?php echo $this->Form->input('Address.zip_code', array('label' => 'CEP: ', 'id'=>'zip_code')); ?>
			<?php echo $this->Form->input('Address.number', array('label' => 'Número: ')); ?>
			<?php echo $this->Form->input('Address.address', array('label' => 'Endereço: ', 'id'=>'address')); ?>
			<?php echo $this->Form->input('Address.complement', array('label' => 'Complemento: ')); ?>
			<?php echo $this->Form->input('Address.neighborhood', array('label' => 'Bairro: ','id'=>'neighborhood')); ?>
			<?php echo $this->Form->input('Address.city', array('label' => 'Cidade: ', 'id'=>'city')); ?>
			<?php echo $this->Form->input('Address.state', array('options' => array("AC"=>"AC","AL"=>"AL","AP"=>"AP","AM"=>"AM","BA"=>"BA","CE"=>"CE","DF"=>"DF","ES"=>"ES","GO"=>"GO","MA"=>"MA","MG"=>"MG","MT"=>"MT","MS"=>"MS","PA"=>"PA","PB"=>"PB","PE"=>"PE","PI"=>"PI","PR"=>"PR","RJ"=>"RJ","RN"=>"RN","RO"=>"RO","RR"=>"RR","RS"=>"RS","SC"=>"SC","SE"=>"SE","SP"=>"SP","TO"=>"TO"),'type' => 'select', 'empty' => 'Selecione','label' => 'Estado: ', 'id'=>'state')); ?>
	</fieldset>
</div>
<div class="Client_Form">
	<fieldset id="Client_Users">
		<legend class="legenda">Usuário</legend>

			<?php echo $this->Form->input('User.username',array('label' => 'Nome de usuário: <br>', 'required'=>'required','id' => 'campo_usuario')); ?>
			<?php echo $this->Form->input('User.password', array('label' => 'Senha: <br>','required'=>'required', 'id' => 'senha')); ?>
			<?php echo $this->Form->input('User.type', array('label' => 'Tipo de usuário: <br>','required'=>'required', 'id' => 'tipousuario','options' => array('client' => 'Cliente'))); ?>
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>