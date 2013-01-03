<div class="companies form">
	<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend>Cadastrar Empresa</legend>
		<?php
			echo $this->Form->input('cnpj');
			echo $this->Form->input('name');
			echo $this->Form->input('acronym');
			echo $this->Form->input('phone1');
			echo $this->Form->input('phone2');
			echo $this->Form->input('Address.address');
			echo $this->Form->input('Address.number');
			echo $this->Form->input('Address.neighborhood');
			echo $this->Form->input('Address.city');
			echo $this->Form->input('Address.state');
			echo $this->Form->input('Address.complement');
			echo $this->Form->input('Address.zip_code');
			echo $this->Form->input('Sponsor.name');
			echo $this->Form->input('Sponsor.phone');
			echo $this->Form->input('Sponsor.email');
			echo $this->Form->input('Financial.name');
			echo $this->Form->input('Financial.phone');
			echo $this->Form->input('Financial.email');
			echo $this->Form->input('Sepg.name');
			echo $this->Form->input('Sepg.phone');
			echo $this->Form->input('Sepg.email');
		?>
	</fieldset>
	<?php echo $this->Form->end('ENVIAR'); ?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Voltar', array('action' => 'index')); ?></li>
	</ul>
</div>
