<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->PER_CORREL,
);

<?php echo BsHtml::pageHeader('Ver','Usuario '.$model->PER_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PER_CORREL',
		'USU_PASSWORD',
		'USU_ESTADO',
		'USU_ROLE',
		'USU_MODIFIED',
		'USU_CREATE',
	),
)); ?>