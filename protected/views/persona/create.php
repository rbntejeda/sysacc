<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>
<div class="col-md-6 col-md-offset-3">
<?php
$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Persona') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<div>