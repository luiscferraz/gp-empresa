<div class="project index">

	<table cellpadding="0" cellspacing="0">
	<h3><div align=center><?php echo $this->Session->flash(); ?></div></h3>
		<tr>
			<th>Nome</th>
			<th>Sigla</th>
			<th>Empresa</th>
			<th>Tempo</th>
			<th class="actions">Ações</th>
		</tr>
		
		<?php
			
			$i = 0;
			foreach ($projects as $project) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
					
				}
					
							
		?>
		
				
		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $project['Project']['name']; ?></td>
			<td class="sigla"><?php echo $project['Project']['acronym']; ?></td>
			<td class="empresa"><?php echo $project['Company']['name']; ?></td>
			<td class="tempo"><?php echo $project['Project']['time_a']; ?></td>

			<div class="actions">
				<td>
									
					<?php echo $this->Html->link(
					$this->Html->image("view.png", array('alt' => 'Ver')), array('action' => 'view', $project['Project']['id']), array('escape'=>false, 'id'=>'link'))?>

					<?php echo $this->Html->link(
					$this->Html->image("edit.png", array('alt' => 'Editar')), array('action' => 'edit', $project['Project']['id']),
					array('escape'=>false, 'id'=>'link'))?>

					<?php echo $this->Html->link(
					$this->Html->image("delete.png", array('alt' => 'Remover')), array('action' => 'delete', $project['Project']['id']),
					array('escape'=>false, 'id'=>'link'), "Confirmar exclusão do projeto ". $project['Project']['name'] . "?");
					
					
					?></td>
			</div>
		</tr>
		<?php } ?>
	</table>
	
</div>