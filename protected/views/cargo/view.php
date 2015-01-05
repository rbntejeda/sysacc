<?php
/* @var $this CargoController */
/* @var $model Cargo */
?>

<?php
$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->CAR_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Cargo', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Cargo', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Cargo', 'url'=>array('update', 'id'=>$model->CAR_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Cargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CAR_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Cargo '.$model->CAR_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'CAR_CORREL',
		'ARE_CORREL',
		'CAR_NOMBRE',
	),
)); ?>