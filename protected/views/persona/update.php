<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PER_CORREL=>array('view','id'=>$model->PER_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Persona', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Persona', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Persona', 'url'=>array('view', 'id'=>$model->PER_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Persona '.$model->PER_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>