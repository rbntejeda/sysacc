<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
?>

<?php
$this->breadcrumbs=array(
	'Indicadors'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Indicador', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Indicador', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Indicador') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>