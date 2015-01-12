<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
?>

<?php
$this->breadcrumbs=array(
	'Indicadors'=>array('index'),
	$model->IND_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Indicador', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Indicador', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Indicador', 'url'=>array('update', 'id'=>$model->IND_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Indicador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IND_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Indicador', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Indicador '.$model->IND_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'IND_CORREL',
		'PLA_CORREL',
		'IND_ANYO',
		'IND_MES',
		'IND_CTP',
		'IND_HHMES',
		'IND_DIASPERDIDOS',
		'IND_DOTACION',
		'IND_PRODUCCION',
	),
)); ?>