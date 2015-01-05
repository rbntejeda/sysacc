<?php
/* @var $this CargoController */
/* @var $model Cargo */
?>

<?php
$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Cargo', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Cargo') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>