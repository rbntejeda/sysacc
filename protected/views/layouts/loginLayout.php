<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
	$cs        = Yii::app()->clientScript;
	$baseUrl = Yii::app()->request->baseUrl;

	/**
	 * StyleSHeets
	 */
	$cs->registerCssFile($baseUrl . '/css/bootstrap.css');

	/**
	 * JavaScripts
	 */
	$cs->registerCoreScript('jquery', CClientScript::POS_END);
	$cs->registerCoreScript('jquery.ui', CClientScript::POS_END);

	$cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
	//Validacion de Rut
	$cs->registerScriptFile($baseUrl . '/js/jquery.Rut.min.js', CClientScript::POS_END);
	$cs->registerScript('validarRut',"$(document).ready(function(){ $('#LoginForm_username').Rut({on_error: function(){ alert('Rut incorrecto'); }});})");

	?>

	<!--[if lt IE 9]><script src="<?php	echo $baseUrl . '/js/html5shiv.js';	?>"></script><script src="<?php	echo $baseUrl . '/js/respond.min.js';?>"></script><![endif]-->
	<style type="text/css">
			.login-panel {
		      margin-top: 15%;
		  }
	</style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
		<div class="container-fluid">
			<?php echo $content; ?>
		</div>
</body>