<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
?>

<?php
$this->breadcrumbs=array(
	'Indicador',
	$model->PLA_NOMBRE,
);
?>

<?php echo BsHtml::pageHeader('Mostrar','Indicador del mes de '.$model->MES.' año '.$model->IND_ANYO.','.$model->PLA_NOMBRE.'.') ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PLA_NOMBRE',
		'IND_ANYO',
		'MES',
		'IND_CTP',
		'IND_HHMES',
		'IND_DIASPERDIDOS',
		'IND_DOTACION',
		'IND_PRODUCCION',
	),
)); ?>