<div class="company index">
	
	<h2>Empresas</h2>

	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>Sigla</th>
			<th>CNPJ</th>
			<th>Telefone</th>
			<th class="actions">Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($companies as $company) 
			{
				$class = null;
				if($i++ % 2 == 0)
				{
					$class = ' class="altrow"';
				}
			
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $company['Company']['name']; ?></td>
			<td class="sigla"><?php echo $company['Company']['acronym']; ?></td>
			<td class="cnpj"><?php echo $company['Company']['cnpj']; ?></td>
			<td class="telefone1"><?php echo $company['Company']['phone1']; ?></td>

			<div class="actions">
				<td>
					<?php echo $this->Html->link('Editar', array('action' => 'edit', $company['Company']['id']),
					array('escape'=>false))?></td>
				<td>
					<?php echo $this->Html->link('Deletar', array('action' => 'delete', $company['Company']['id']), array('escape'=>false), "Confirmar Exclusão de Empresa?")?></td>
			</div>
		</tr>
		<?php } ?>
	</table>
	
</div>