<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PER_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Persona', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Persona', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->PER_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PER_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Persona '.$model->PER_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PER_CORREL',
		'CAR_CORREL',
		'PER_RUT',
		'PER_NOMBRE',
		'PER_PATERNO',
		'PER_MATERNO',
		'PER_EMAIL',
		'PER_TELEFONO',
		'PER_DIRECCION',
	),
)); ?>