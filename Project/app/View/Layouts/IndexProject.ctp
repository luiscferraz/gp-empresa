<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('style'); ?>
		<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
		<?php echo $this->Html->script('aplicacao'); ?>
        <title>Página Principal</title>
    </head>

    <body>
        
        <?php echo $this->Html->link("Cadastrar", array('action' => 'add'),array('id' => 'botaoCadastrar')); ?>

        <div id="Menu_Home">
            <a href="#" id="botao_home"><?php echo $this->Html->image('button-home.png', array('alt' => ''))?></a>
        </div>

        <h1><?php echo $this->Html->image('sw-quality.png', array('id'=>'companyLogo'))?> 
            SWSchool - Projetos</h1>


		<?php echo $this->fetch('content'); ?>

    </body>

</html>
