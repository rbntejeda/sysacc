<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PER_CORREL,
);?>
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
<?php
echo (!$model->IFUSUARIO)?
	BsHtml::linkButton('Agregar Usuario', array(
		'url'=>array('/usuario/crear/'.$model->PER_CORREL),
	    'color' => BsHtml::BUTTON_COLOR_PRIMARY)):
    BsHtml::linkButton('Quitar Usuario', array(
		'url'=>array('/usuario/deleted/'.$model->PER_CORREL),
	    'color' => BsHtml::BUTTON_COLOR_PRIMARY));
?>