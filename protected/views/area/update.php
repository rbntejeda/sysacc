<?php
/* @var $this AreaController */
/* @var $model Area */
?>

<?php
$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->ARE_CORREL=>array('view','id'=>$model->ARE_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Area', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Area', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Area', 'url'=>array('view', 'id'=>$model->ARE_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Area', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Area '.$model->ARE_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>