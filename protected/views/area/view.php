<?php
/* @var $this AreaController */
/* @var $model Area */
?>

<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->ARE_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Area', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Area', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Area', 'url'=>array('update', 'id'=>$model->ARE_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARE_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Area', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Area '.$model->ARE_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ARE_CORREL',
		'ARE_NOMBRE',
		'ARE_TIPO',
	),
)); ?>