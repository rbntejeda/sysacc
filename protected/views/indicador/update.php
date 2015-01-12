<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
?>

<?php
$this->breadcrumbs=array(
	'Indicadors'=>array('index'),
	$model->IND_CORREL=>array('view','id'=>$model->IND_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Indicador', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Indicador', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Indicador', 'url'=>array('view', 'id'=>$model->IND_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Indicador', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Indicador '.$model->IND_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>