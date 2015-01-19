<?php
/* @var $this PlantaController */
/* @var $model Planta */
?>

<?php
$this->breadcrumbs=array(
	'Plantas',
	'Agregar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Planta', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Planta', 'url'=>array('admin')),
);
?>
<div class="col-md-6 col-md-offset-3">
<?php echo BsHtml::pageHeader('Agregar','Planta') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>