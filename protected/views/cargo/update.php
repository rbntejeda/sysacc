<?php
/* @var $this CargoController */
/* @var $model Cargo */
?>

<?php
$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->CAR_CORREL=>array('view','id'=>$model->CAR_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Cargo', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Cargo', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Cargo', 'url'=>array('view', 'id'=>$model->CAR_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Cargo '.$model->CAR_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>