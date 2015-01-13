<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas',
	'Agregar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Empresa', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Empresa') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>