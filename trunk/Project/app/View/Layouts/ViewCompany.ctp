<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dados da empresa</title>
	<?php echo $this->Html->css('styleViewCompany'); ?>
	
</head>
<body>
	<a href="/Companies" id="botaoHome"><?php echo $this->Html->image('button-home.png')?></a>

	<?php echo $this->Html->link("Editar", array('action' => 'edit'),array('class'=>'botaoEditar', 'id' => 'botaoEditar')); ?>

	<h1>
		<?php echo $this->Html->image('company-logo.png', array('id'=>'companyLogo'))?> 
		Empresa: <?php echo $company['Company']['name']; ?> 
	</h1>

	<?php echo $this->fetch('content'); ?>
</body>
</html>