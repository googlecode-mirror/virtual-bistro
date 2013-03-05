<div class="Client_Form">
	<fieldset id="Client_Personal">
		<legend class="legenda">Dados Pessoais</legend>
			
			<p><span>Nome: </span> <?php echo $client['Client']['name']; ?></p>
			<p><span>CPF: </span><?php echo $client['Client']['cpf']; ?></p>
			<p><span>Telefone: </span><?php echo $client['Client']['phone']; ?></p>
			<p><span>Celular: </span><?php echo $client['Client']['cellphone']; ?></p>
			<p><span>E-mail: </span><?php echo $client['Client']['email']; ?></p>

	</fieldset>
</div>

<div class="Client_Form">
	<fieldset id="Client_Adress">
		<legend class="legenda">Endereço</legend>

			<p><span>Endereço: </span><?php echo $client['Address']['address']; ?></p>
			<p><span>Número: </span><?php echo $client['Address']['number']; ?></p>
			<p><span>Complemento: </span><?php echo $client['Address']['complement']; ?></p>
			<p><span>Bairro: </span><?php echo $client['Address']['neighborhood']; ?></p>
			<p><span>CEP: </span><?php echo $client['Address']['zip_code']; ?></p>
			<p><span>Cidade: </span><?php echo $client['Address']['city']; ?></p>
			<p><span>Estado: </span><?php echo $client['Address']['state']; ?></p>
	</fieldset>
	<div class="Client_Form">
	<fieldset id="Client_Users">
		<legend class="legenda">Usuário</legend>
			<p><span>Tipo: </span><?php echo $client['User']['type']; ?></p>
			
	</fieldset>
</div>
			
</div>