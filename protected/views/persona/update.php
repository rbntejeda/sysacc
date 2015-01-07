<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Actuaizar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Persona', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'Ver Persona', 'url'=>array('view', 'id'=>$model->PER_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Persona '.$model->PER_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>