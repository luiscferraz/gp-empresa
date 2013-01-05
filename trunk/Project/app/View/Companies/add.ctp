<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.maskedinput.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function($){        
        $('#cnpj').focus();
        $("#cnpj").mask("99.999.999/9999-99");
		$("#phone1").mask("(99)9999-9999");
		$("#phone2").mask("(99)9999-9999");
		$("#zip_code").mask("99999-999");
    });
</script>
<div class="companies form">
	<?php echo $this->Form->create('Company', array('action' => 'add')); ?>
	
	
	<div class="left">
		<fieldset id="dadosEmpresa">
			<legend>Dados da Empresa</legend>
			<?php
				echo $this->Form->input('cnpj', array('label' => 'CNPJ:', 'id' => 'cnpj'));
				echo $this->Form->input('name', array('label' => 'Nome da empresa:'));
				echo $this->Form->input('acronym', array('label' => 'Sigla:'));			
				echo $this->Form->input('phone1', array('label' => 'Telefone:', 'id' => 'phone1'));
				echo $this->Form->input('phone2', array('label' => 'Telefone 2 (opcional):', 'id' => 'phone2'));
			?>
		</fieldset>
		
		<fieldset id="dadosEndereço">
			<legend>Endereço</legend>
			<?php
				echo $this->Form->input('Address.zip_code', array('label' => 'CEP:', 'id' => 'zip_code'));
                echo '<input type="button" style="width:130;height:30" value="Buscar Endereço" onclick="getEndereco()"/>';			
				echo $this->Form->input('Address.address', array('label' => 'Endereço:', 'id' => 'address'));
				echo $this->Form->input('Address.number', array('label' => 'Número:'));
				echo $this->Form->input('Address.neighborhood', array('label' => 'Bairro:', 'id' => 'neighborhood'));
				echo $this->Form->input('Address.city', array('label' => 'Cidade:', 'id' => 'city'));
				echo $this->Form->input('Address.state', array('label' => 'Estado:', 'id' => 'state'));
				echo $this->Form->input('Address.complement', array('label' => 'Complemento:'));
				
			?>
		</fieldset>
	</div>

	<div class="right">
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
	
		<?php 
		echo $this->Form->end('ENVIAR');
		echo $this->Form->button('LIMPAR', array('type'=>'reset', 'id'=>'botaoRestaurar')); 
		?>
		
	</div>
</div>
