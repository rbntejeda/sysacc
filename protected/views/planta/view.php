<?php
/* @var $this PlantaController */
/* @var $model Planta */
?>

<?php
$this->breadcrumbs=array(
	'Plantas'=>array('index'),
	$model->PLA_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Planta', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Planta', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Planta', 'url'=>array('update', 'id'=>$model->PLA_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Planta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLA_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Planta', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Planta '.$model->PLA_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PLA_CORREL',
		'COM_CORREL',
		'EMP_CORREL',
		'PLA_RUT',
		'PLA_NOMBRE',
		'PLA_DIRECCION',
		'PLA_TELEFONO',
		'PLA_ESTADO',
	),
)); ?>