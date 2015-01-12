<?php
/* @var $this PlantaController */
/* @var $model Planta */
?>

<?php
$this->breadcrumbs=array(
	'Plantas',
	'Agregar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Planta', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Planta', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Planta') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>