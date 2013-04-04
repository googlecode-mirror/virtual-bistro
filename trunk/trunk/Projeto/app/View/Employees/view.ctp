<div class="Employee_Form">
	<fieldset id="Employee_Personal">
		<legend class="legenda">Dados Pessoais</legend>
			
			<p><span>Nome: </span> <?php echo $employee['Employee']['name']; ?></p>
			<p><span>CPF: </span><?php echo $employee['Employee']['cpf']; ?></p>
			<p><span>Telefone: </span><?php echo $employee['Employee']['phone']; ?></p>
			<p><span>Celular: </span><?php echo $employee['Employee']['cellphone']; ?></p>
			<p><span>E-mail: </span><?php echo $employee['Employee']['email']; ?></p>

	</fieldset>

	<fieldset id="Employee_Adress">
		<legend class="legenda">Endereço</legend>

			<p><span>Endereço: </span><?php echo $employee['Address']['address']; ?></p>
			<p><span>Número: </span><?php echo $employee['Address']['number']; ?></p>
			<p><span>Complemento: </span><?php echo $employee['Address']['complement']; ?></p>
			<p><span>Bairro: </span><?php echo $employee['Address']['neighborhood']; ?></p>
			<p><span>CEP: </span><?php echo $employee['Address']['zip_code']; ?></p>
			<p><span>Cidade: </span><?php echo $employee['Address']['city']; ?></p>
			<p><span>Estado: </span><?php echo $employee['Address']['state']; ?></p>
	</fieldset>
	<fieldset id="Employee_Users">
		<legend class="legenda">Usuário</legend>
			<p><span>Tipo: </span><?php echo $employee['User']['type']; ?></p>
			
	</fieldset>

			
</div>