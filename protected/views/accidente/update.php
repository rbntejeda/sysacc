<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
?>

<?php
$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->ACC_CORREL=>array('view','id'=>$model->ACC_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Accidente', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Accidente', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Accidente', 'url'=>array('view', 'id'=>$model->ACC_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Accidente '.$model->ACC_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>