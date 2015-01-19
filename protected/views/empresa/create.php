<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas',
	'Agregar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Empresa', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>
<div class="col-md-6 col-md-offset-3">
<?php echo BsHtml::pageHeader('Agregar','Empresa') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>