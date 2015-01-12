<?php
/* @var $this PlantaController */
/* @var $model Planta */
?>

<?php
$this->breadcrumbs=array(
	'Plantas'=>array('index'),
	$model->PLA_CORREL=>array('view','id'=>$model->PLA_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Planta', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Planta', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Planta', 'url'=>array('view', 'id'=>$model->PLA_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Planta', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Planta '.$model->PLA_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>