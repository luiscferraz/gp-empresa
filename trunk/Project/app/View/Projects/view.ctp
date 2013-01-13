<div class="project view">
	
	<div class='dadosProjeto'>
		<p><?php 
				echo 'Sigla: ';
				echo $project['Project']['acronym'];
			?></p>
		<p><?php 
				echo 'Descrição: ';
				echo $project['Project']['description'];
			?></p>
		<p><?php 
				echo 'Projeto pai: ';
				echo $project['Project']['parent_project_id'];
			?></p>
		<p><?php 
				echo 'Empresa: ';
				echo $project['Project']['company_id'];
			?></p>
	</div>

	<div class='dadosHoras'>
		<h2>Organização de horas</h2>
		<p><?php 
			echo 'Tipo A: ';
			echo $project['Project']['time_a']; 
			echo ' / Tipo B: ';
			echo $project['Project']['time_b']; 
			echo ' / Tipo C: ';
			echo $project['Project']['time_c']; 
		?></p>
		<p id='total'><?php 
			echo 'Total: ';
			echo $project['Project']['time_a'] + $project['Project']['time_b'] + $project['Project']['time_c'];
		?></p>
	</div>

</div>