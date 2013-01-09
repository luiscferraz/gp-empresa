<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('reset'); ?>
		
		<?php echo $this->Html->css('smoothness/jquery-ui-1.9.2.custom'); ?>				
		<?php echo $this->Html->css('jquery.weekcalendar'); ?>		
		<?php echo $this->Html->css('demo'); ?>		
		<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
		<?php echo $this->Html->script('jquery-ui-1.9.2.custom.min') ?>
		<?php echo $this->Html->script('jquery.weekcalendar') ?>
		<?php echo $this->Html->script('demo') ?>
		<?php echo $this->Html->script('aplicacao'); ?>		
		
        <title>SWSchool Home</title>
    </head>

    <body>

    
	<h1><?php echo $this->Html->image('company-logo.png', array('id'=>'companyLogo'))?> 
            SWSchool - Agenda</h1>      

				<div>
        <a href="companies"> Empresas </a></br>
		<a href="consultants"> Consultores </a></br>
		<a href="projects"> Projetos </a></br>
	</div>
  
<div class="conteudo" >
	    <div id='calendar'></div>
	    <div id="event_edit_container" >
		<form>
		    <input type="hidden" />
		    <ul>
			<li>
			    <span>Data: </span><span class="date_holder"></span>
			</li>
			<li>
			    <label for="title">Nome: </label><input type="text" name="title" class="campo round" />
			</li>
			<li>
			    <label for="start">Hora Inicial: </label><select name="start" class="campo round"></select>
			</li>
			<li>
			    <label for="end">Hora Final: </label><select name="end" class="campo round"></select>
			</li>
			<li>
			    <label for="consultor1">Consultor 1: </label><select name="consultor1" class="campo round"></select>
			</li>
			<li>
			    <label for="consultor2">Consultor 2: </label><select name="consultor2" class="campo round"></select>
			</li>
			<li>
			    <label for="consultor3">Consultor 3: </label><select name="consultor3" class="campo round"></select>
			</li>
			<li>
			    <label for="consultor4">Consultor 4: </label><select name="consultor4" class="campo round"></select>
			</li>
		    </ul>
		</form>
	    </div>
	</div>

		

    </body>

</html>


