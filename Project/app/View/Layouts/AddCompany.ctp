<?php
  echo $this->Html->script('jquery-1.7');
?>

<?php
    echo $this->Html->script('jquery.maskedinput-1.3');
?>

<?php
    echo $this->Html->script('buscacep');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cadastrar Empresa</title>
	<?php echo $this->Html->css('styleAddEditCompany'); ?>
	
</head>
<body>
	<a href="/Companies" id="botao_home"><?php echo $this->Html->image('button-home.png')?></a>

	<h1>Cadastrar Empresa</h1>

	<?php echo $this->fetch('content'); ?>
	<?php echo $this->Js->writeBuffer(); // note: write cached scripts ?>
</body>
</html>
