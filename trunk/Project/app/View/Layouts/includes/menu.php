<div id="Menu_Home">
	<a href="#" id="botao_home">Menu Principal- SWS<?php echo $this->Html->image('botao_home.png', array('alt' => ''))?></a>
		<ul>
			<li><?php echo $this->Html->link('Consultor', array('action' =>'../consultants'));?></li>
			<li><?php echo $this->Html->link('Empresa', array('action' =>'../companies'));?></li>
			<li><?php echo $this->Html->link('Projeto', array('action' =>'../projects'));?></li>
		</ul>
</div>
