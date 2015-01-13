<?php
/* @var $this PlantaController */
/* @var $model Planta */
?>

<?php
$this->breadcrumbs=array(
	'Plantas'=>array('index'),
	$model->PLA_CORREL,
);
echo BsHtml::pageHeader('View','Planta '.$model->PLA_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'COM_NOMBRE',
		'EMP_NOMBRE',
		'PLA_RUT',
		'PLA_NOMBRE',
		'PLA_DIRECCION',
		'PLA_TELEFONO',
		'PLA_ESTADO',
	),
)); ?>