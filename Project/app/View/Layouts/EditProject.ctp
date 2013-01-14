<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Editar Empresa</title>
	<?php echo $this->Html->css('style'); ?>
	
</head>
<body>
	<a href="/projects" id="botaoHome"><?php echo $this->Html->image('button-home.png')?></a>

	<h1><?php echo $this->Html->image('sw-quality.png', array('id'=>'companyLogo'))?>
		Editar Projeto</h1>

	<?php echo $this->fetch('content'); ?>
</body>
</html>
