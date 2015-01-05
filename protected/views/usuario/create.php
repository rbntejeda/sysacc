<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Usuario') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>