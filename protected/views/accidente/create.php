<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
?>

<?php
$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Accidente', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>
<div class="col-md-6 col-md-offset-3">
<?php echo BsHtml::pageHeader('Create','Accidente') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>