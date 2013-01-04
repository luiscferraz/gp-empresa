<div class="companies form">
	<?php echo $this->Form->create('Company', array('action' => 'add')); ?>
	
	<fieldset id="dadosEmpresa">
		<legend>Dados da Empresa</legend>
		<?php
			echo $this->Form->input('name', array('label' => 'Nome da empresa:'));
			echo $this->Form->input('acronym', array('label' => 'Sigla:'));
			echo $this->Form->input('cnpj', array('label' => 'CNPJ:'));
			echo $this->Form->input('phone1', array('label' => 'Telefone:'));
			echo $this->Form->input('phone2', array('label' => 'Telefone 2 (opcional):'));
		?>
	</fieldset>
	
	<fieldset id="dadosEndereço">
		<legend>Endereço</legend>
		<?php
			echo $this->Form->input('Address.address', array('label' => 'Endereço:'));
			echo $this->Form->input('Address.number', array('label' => 'Número:'));
			echo $this->Form->input('Address.neighborhood', array('label' => 'Bairro:'));
			echo $this->Form->input('Address.city', array('label' => 'Cidade:'));
			echo $this->Form->input('Address.state', array('label' => 'Estado:'));
			echo $this->Form->input('Address.complement', array('label' => 'Complemento:'));
			echo $this->Form->input('Address.zip_code', array('label' => 'CEP:'));
		?>
	</fieldset>

	<fieldset id="dadosSponsor">
		<legend>Dados do Sponsor</legend>
		<?php
			echo $this->Form->input('Sponsor.name', array('label' => 'Nome:'));
			echo $this->Form->input('Sponsor.phone', array('label' => 'Telefone:'));
			echo $this->Form->input('Sponsor.email', array('label' => 'Email:'));
		?>
	</fieldset>

	<fieldset id="dadosFinanceiros">
		<legend>Dados Financeiros</legend>
		<?php
			echo $this->Form->input('Financial.name', array('label' => 'Nome:'));
			echo $this->Form->input('Financial.phone', array('label' => 'Telefone:'));
			echo $this->Form->input('Financial.email', array('label' => 'Email:'));
		?>
	</fieldset>

	<fieldset id="dadosSepg">
		<legend>Dados SEPG</legend>
		<?php
			echo $this->Form->input('Sepg.name', array('label' => 'Nome:'));
			echo $this->Form->input('Sepg.phone', array('label' => 'Telefone:'));
			echo $this->Form->input('Sepg.email', array('label' => 'Email:'));
		?>
	</fieldset>
			

	<?php echo $this->Form->end('ENVIAR'); ?>
</div>
