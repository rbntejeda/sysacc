<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Persona', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Persona') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>