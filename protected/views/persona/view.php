<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PER_CORREL,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Añadir Persona', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Añadir Usuario', 'url'=>array('/usuario/crear','id'=>$model->PER_CORREL)),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Actualizar Persona', 'url'=>array('update', 'id'=>$model->PER_CORREL)),
	array('visible'=>Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN"),'icon' => 'glyphicon glyphicon-minus-sign','label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('deleted','id'=>$model->PER_CORREL),'confirm'=>'¿Desea realmente eliminar a esta persona?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver',$model->nombreCompleto) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'PER_CORREL',
		'CAR_CORREL',
		'EMP_NOMBRE',
		'PER_RUT',
		'PER_NOMBRE',
		'PER_PATERNO',
		'PER_MATERNO',
		'PER_EMAIL',
		'PER_TELEFONO',
		'PER_DIRECCION',
		'USUARIO',
	),
)); ?>