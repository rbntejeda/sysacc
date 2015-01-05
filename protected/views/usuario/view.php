<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->PER_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Usuario', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Usuario', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->PER_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PER_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Usuario '.$model->PER_CORREL) ?>

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
		'USU_TIPO',
	),
)); ?>