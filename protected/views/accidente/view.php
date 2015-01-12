<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
?>

<?php
$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->ACC_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Accidente', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Accidente', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Accidente', 'url'=>array('update', 'id'=>$model->ACC_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Accidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ACC_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Accidente '.$model->ACC_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ACC_CORREL',
		'PLA_CORREL',
		'CAR_CORREL',
		'ACC_DESCRICPION',
		'ACC_SITIO',
		'ACC_FECHA',
		'ACC_PARAFECT',
		'ACC_RUT',
		'ACC_TIPO',
		'ACC_AGENTE',
		'ACC_ACCION',
		'ACC_CONSEC',
	),
)); ?>