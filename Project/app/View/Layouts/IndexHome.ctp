<?php 
	echo $this->Html->script('jquery-1.7');
    echo $this->Html->script('aplicacao');
	include 'includes/menu.php'; 
?>

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
		<?php echo $this->Html->css('style'); ?>
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
  
<p align = "center" style="font-size: 200px"> =) </p>

		

    </body>

</html>


