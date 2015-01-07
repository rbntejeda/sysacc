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
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar', 'url'=>array('admin')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Usuario', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Usuario'); ?>

<?php $this->renderPartial('_form', array('model'=>$model,"per"=>$per)); ?>