<?php
/* @var $this AreaController */
/* @var $model Area */
?>

<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Area', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Area', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Area') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>