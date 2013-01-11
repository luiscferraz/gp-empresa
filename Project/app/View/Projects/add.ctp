<div class="projects form">
	<?php echo $this->Form->create('Project', array('action' => 'add')); ?>
	
	
	<div class="left">
		<fieldset id="dadosProjeto">
			<legend>Dados do Projeto</legend>
			<?php
				foreach ($projects as $project)
					{
						$list_projects[$project['Project']['id']] =$project['Project']['name'];
					};

				foreach ($companies as $company)
					{
						$list_companies[$company['Company']['id']] =$company['Company']['name'];
					};
						if (!isset($list_projects)){
							$list_projects['none'] = 'Nenhum Projeto Cadastrado';
						}
						elseif(!isset($list_companies)){
							$list_companies['none'] = 'Nenhuma Empresa Cadastrada';
						}
			?>
			<?php
				echo $this->Form->input('name', array('label' => 'Nome:', 'required'=>'required'));				
				echo $this->Form->input('description', array('label' => 'Descrição:', 'required'=>'required'));
				echo $this->Form->input('acronym', array('label' => 'Sigla:', 'required'=>'required' ));							
				echo $this->Form->input('parent_project_id',array('options' => $list_projects,'type' => 'select', 'empty' => 'Selecione','label' => 'Projeto Pai: ', 'id' => 'parent_project'));
				echo $this->Form->input('company_id',array('options' => $list_companies,'type' => 'select', 'empty' => 'Selecione','label' => 'Projeto Empresa: ', 'id' => 'company', 'required'=>'required'));

				?>
		</fieldset>

		<fieldset id="dadosHoras">
			<legend>Horas</legend>
			<?php
				echo $this->Form->input('time_a', array('label' => 'Tipo A:', 'id' => 'tempoA'));                
				echo $this->Form->input('time_b', array('label' => 'Tipo B:', 'id' => 'tempoB'));  
				echo $this->Form->input('time_c', array('label' => 'Tipo C:', 'id' => 'tempoC'));  
			?>
		</fieldset>
	<div>
	
	<div class="right">
		<?php 
		echo $this->Form->end('ENVIAR');
		echo $this->Form->button('LIMPAR', array('type'=>'reset', 'id'=>'botaoRestaurar')); 
		?>
	</div>
		
	
</div>
